<?php
namespace Admin\Controller;
use Think\Controller;
//小组的模块管理控制器. //包括了小组审核 小组列表 小组的管理 
class GroupController extends CommonController {
    //主页的显示
    public function index(){
        $gp=M('postGp');

        $p=I('get.page');
        if(empty($p)){
            $p='12';
        }

        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "Group_Name like '%".$_GET['keyword']."%' And `Group_state`=0";
        }else{
            $where="`Group_state`=0";
        }

        $count = $gp->where($where)->count();

        $Page=new \Think\Page($count,$p);
        $PageShow=$Page->show();

        $res=$gp->alias('g')->field('g.*,u.User_Nickname')->join('User_Info as u on u.U_PID=g.Group_Uid')->order('g.G_id')->limit($Page->firstRow.','.$Page->listRows)->where($where)->select();
        // echo $gp->_sql();
        // var_dump($res);
        // die;
        $this->assign('res',$res);
        $this->assign('pages',$PageShow);

        $this->display();
    }
    
    //添加小组页面
    public function add(){
        $this->display();
    }

    //添加的时候验证
    public function Verify(){
        $user=M('postGp');
        $email=I('get.email');
        $where="`Group_Name`='".$email."'";
        $res=$user->where($where)->find();
        if($res){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }
    //添加的时候验证
    public function Ver(){
        $user=M('userVerify');
        $email=I('get.id');
        $where="`U_id`='".$email."'";
        $res=$user->where($where)->find();
        if($res){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    //添加处理  成功并且加入到组表
    public function insert(){
        $m=M();
        $m->startTrans();
        Uploads('Group_Src');
        // var_dump($_POST);
        $_POST['Group_Ctime']=time();
        $G=M('postGp');
        $G->create();
        $res=$G->add();
        if($res){
                $m->commit();
                $this->success('小组'.$res.'添加成功!', U('Admin/Group/index'),3);
            }else{
                $pic=$_POST['Group_Src'];
                $pic = './Public'.$pic;
                $r=unlink($pic);
                $this->error('小组添加失败!');
        }
    }

    //小组前台申请的时候页面
    public function Gjoin(){
        $join=M('postJoin');
        $where="j.`J_state`='0'";
        $res=$join->alias('j')->field('j.*,u.User_Nickname,i.User_Email')->join('User_Info as u on u.U_PID=j.U_id')->join('User_Verify as i on i.U_id=j.U_id')->where($where)->select();
        // echo $join->_sql();
        // var_dump($res);
        // die;
        
        $this->assign('res',$res);

        $this->display();
    }

    //查看小组的申请信息
    public function look(){
        // var_dump($_GET);
        $look=M('PostJoin');
        $where="id=".$_GET['id'];
        $res=$look->field('J_content,J_Name,J_state')->where($where)->find();
        // var_dump($res);
        // die;
        $r=strip_tags($res['J_content']);   
        $this->assign('stats',$res['J_state']); //当前状态
        $this->assign('name',$res['J_Name']);   //申请的小组名
        $this->assign('id',$_GET['id']);        //id
        $this->assign('res',$r);                //申请内容
        $this->display();
    }
    //小组审核的时候判断,做结果
    public function jointo(){
        // var_dump($_POST);
        // die;
        //开启事物
        $m=M();
        $m->startTrans();
            $join=M('postJoin');
        //进行判断 如果是同意审核的
        if($_POST['T']=='true'){
            $_POST['J_state']=1;

            $join->create();
            $res=$join->save();
            //修改成功后把组的信息插入到真正的组表中
            if($res){

            $r=$join->where('id='.$_POST['id'])->find();

            $GP=M('PostGp');
            $time=time();
            $arr=array('Group_Name'=>$r['J_Name'],'Group_Uid'=>$r['U_id'],'Group_Ctime'=>$time);
            $GP->create();
            $w=$GP->add($arr);
            // echo $GP->_sql();
            // die;
            //组表成功后返回成功
                if($w){
                    $m->commit();
                    $this->ajaxReturn($res);
                }else{
                    //否则回滚
                    $m->rollback();
                }
            }
        }else{//如果是不同意审核的
            $_POST['J_state']=2;
            $join->create();
            $res=$join->save();
            if($res){
                $m->commit();
                $this->ajaxReturn($res);
            }else{
                $m->rollback();
            }
        }
        
    }


    //查看小组里面的操作 针对的数据表:Post_Audit
    public function Audit(){
        $A=M('postAudit');
        $G=M('postGp');

        $id=$_GET['id'];

        $src=$G->field('Group_Src,Group_Name,Group_About')->find($_GET['id']);
        $where="Au_State=1 And Au_Gid=$id";
        $res=$A->alias('a')->field('a.*,u.User_Nickname,i.User_Email,t.User_Pic')->join('LEFT JOIN User_Info as u on u.I_Id=a.Au_Uid')->join('LEFT JOIN User_profile as t on t.U_PID=a.Au_Uid')->join('LEFT JOIN User_Verify as i on i.U_id=a.Au_Uid')->where($where)->select();
        $count=count($res);

        // echo $A->_sql();
        // var_dump($res);
        // die;
        $this->assign('img',$src['Group_Src']);
        $this->assign('name',$src['Group_Name']);
        $this->assign('About',$src['Group_About']);
        $this->assign('count',$count);
        $this->assign('res',$res);
        $this->assign('Gid',$res[0]['Au_Gid']);
        $this->display();
    }

    public function Userinfo(){
        // var_dump($_POST);
        // 
        //查询用户的别名和头像,邮箱
        $G=M('PostAudit');
        $where="p.`Au_Uid`='".$_POST['id']."'And Au_Gid=".$_POST['bq'];
        $res=$G->alias('p')->field('u.User_Nickname,t.User_Pic,v.User_Email')->join('User_Verify as v on v.U_id=p.Au_Uid')->join('User_Info as u on u.U_PID=p.Au_Uid')->join('User_profile as t on t.U_PID=p.Au_Uid')->where($where)->select();
        // echo $G->_sql();
        // var_dump($res);
        // die;
        // 查询的是用户的发帖数
        $f=M('PostInfo');
        $where="`Post_Uid`='".$_POST['id']."'And Post_Tid=".$_POST['bq'];
        $r=$f->where($where)->count();
        //发帖总条数
        $count=$f->where("Post_Tid=".$_POST['bq'])->count();

        //回复总条数
        $where="`Rp_Id`='".$_POST['id']."'And Rp_Tid=".$_POST['bq'];
        $h=M('PostReply');
        $hc=$h->where("Rp_Tid=".$_POST['bq'])->count();

        $hh=$h->where($where)->count();
        
        $res[0]['fatie']=$r;
        $res[0]['count']=$count;
        $res[0]['hcount']=$hc;
        $res[0]['hfu']=$hh;

        if($res){
            $this->ajaxReturn($res);
        }

    }

    public function findUser(){
        $A=M('postAudit');
        $name=$_GET['name'];
        $id=$_GET['Gid'];
        $where="Au_State=1 And `Au_Gid`='$id' And i.`User_Email` like '%$name%'";
        $res=$A->alias('a')->field('a.*,u.User_Nickname,i.User_Email,t.User_Pic')->join('LEFT JOIN User_Info as u on u.I_Id=a.Au_Uid')->join('LEFT JOIN User_profile as t on t.U_PID=a.Au_Uid')->join('LEFT JOIN User_Verify as i on i.U_id=a.Au_Uid')->where($where)->select();
        // var_dump($res);
        // die;
        if($res){
            $this->ajaxReturn($res);
        }
    }


}