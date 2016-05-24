<?php
namespace Admin\Controller;
use Think\Controller;
//后台的文章审核管理控制器.
class SciencearticleController extends CommonController {
	//文章审核显示板块
    public function index(){
        $user=M('sc_article');
        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 2;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "Title like '%".$_GET['keyword']."%'";
        }else{
            $where = "";
        }


        // 查询满足要求的总记录数
        $count = $user->where($where)->count();
        // echo $count;
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
        //查询
        $res = $user->field('Img,sc_article.id,sc_article.Display,User_Email,Time,Title,Class_Title')->join('left join user_verify on sc_article.User_Id = user_verify.U_id')->join('left join sc_class on sc_article.Fid= sc_class.id')->where($where)->limit($limit)->select();
        foreach ($res as $k => $v) {
            if ($v['Display']==1) {
                $res[$k]['Display']='是';
            } else {
                $res[$k]['Display']='否';
            }
            
        }
        // 分页显示输出
        $pages = $Page->show();
        foreach ($res as $k => $v) {
            $res[$k]['Img']=htmlspecialchars_decode($v['Img']);
            $res[$k]['Time']=date('Y年m月d日H点i分s秒',$v['Time']);
        }
        // echo $user->_sql();
        // var_dump($res);
        // die;
        // 查询结果赋值给前台
        $this->assign('res',$res);
        $this->assign('pages',$pages);
        //解析模板
        $this->display();
    }
    //修改页面显示版块
    public function reva(){
        $user=M('sc_article');
        //查询
        $res = $user->field('Img,a.id,a.Display,User_Email,Time,Title,Fid,Content,Class_Title,Class_Pid')->alias('a')->join('user_verify as i on a.User_Id = i.U_id')->join('sc_class on sc_class.id = a.Fid')->where('a.id='.$_GET['id'])->select();
        echo $user->_sql();
        // var_dump($_GET);
        // var_dump($res);
        // die;
        //二维数组变成一维
        $res=$res[0];
        //转成HTML
        $res['Content']=htmlspecialchars_decode($res['Content']);
        //实例化分类表
        $users=M('sc_class');
        //查询顶级分类
        $ress=$users->where('Class_Pid=0')->select();
        //判断分类是否有父类
        if($res['Class_Pid']!='0'){
            //查询出父类
            $resss=$users->where('id='.$res['Class_Pid'])->select();
            //子类扔给新变量
            $res['subclass_title']=$res['Class_Title'];
            //父类覆盖子类
            $res['Class_Title']=$resss[0]['Class_Title'];
            //查出父类下的所有子类
            $ressss=$users->field('id,Class_Title')->where('Class_Pid='.$res['Class_Pid'])->select();
        }
        // var_dump($ressss);
        // var_dump($resss);
        // var_dump($res);
        // var_dump($ress);

        // die;
        // 查询结果赋值给前台
        $this->assign('ressss',$ressss);
        $this->assign('ress',$ress);
        $this->assign('res',$res);
        //解析模板
        $this->display();
    }
    //修改处理版块
    public function update(){
        // var_dump($_POST);
        // die;
        $user=M('sc_article');
        $user->create();
        $res=$user->save();
        if ($res) {
            $this->success('修改成功',U('Admin/Sciencearticle/index'),3);
        } else {
            $this->error('修改失败',U('Admin/Sciencearticle/index'),3);
        }
        

    }
    //删除
    public function ajaxdel(){
            // var_dump($_POST);
            // die;
            $user=M('sc_article');
            $user->create();
            $res=$user->delete();
    }
    //文章内容显示板块
    public function content(){
        $user=M('sc_article');
        //接收GET
        $id=I('get.id');
        // echo $id;
        // die;
        //查询标题和文章内容
        $res=$user->field('Title,Content')->find($id);
        // var_dump($res);
        //赋值标题
        $title=$res['Title'];
        //赋值内容,转HTML
        $content=htmlspecialchars_decode($res['Content']);
        // die;
        
        //将结果赋值给前台
        $this->assign('title',$title);
        $this->assign('content',$content);
        //解析模板
        $this->display();
    }
    
    
    

    






}