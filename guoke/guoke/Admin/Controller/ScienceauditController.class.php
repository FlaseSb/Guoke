<?php
namespace Admin\Controller;
use Think\Controller;
//后台的文章审核管理控制器.
class ScienceauditController extends CommonController {
	//文章审核显示板块
    public function index(){
        $user=M('sc_article');
        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 2;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "sc_article.`Display`='0' and Title like '%".$_GET['keyword']."%'";
        }else{
            $where = "sc_article.Display='0'";
        }


        // 查询满足要求的总记录数
        $count = $user->where($where)->count();
        // echo $count;
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
        //查询
        $res = $user->field('Img,sc_article.id,User_Email,Time,Title,Class_Title')->join('left join user_verify on sc_article.User_Id = user_verify.U_id')->join('left join sc_class on sc_article.Fid = sc_class.id')->where($where)->limit($limit)->select();

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

    //审核成功板块
    public function ajaxaudit(){
            $_POST['Display']=1;
            $user=M('sc_article');
            $user->create();
            $res=$user->save();
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
    //ajax修改
    public function ajaxReva(){
        //把是否显示文本改成数字
        if ($_POST['display']=='是') {
            $_POST['display']=1;
        }else{
            $_POST['display']=0;
        }
        //实例化表
        $user=M('sc_class');
        //数据过滤
        $user->create();
        //修改
        $res=$user->save();
        echo $res;
        
    }
    //ajax删除
    public function ajaxDel(){
        $id=I('post.id');
        //查询是否有子类
        $user=M('sc_class');
        //
        $res=$user->where('Class_Pid='.$id)->select();
        if($res){
             echo '还有子类,不允许删除';
             die;
         }
        //删除
        $ress=$user->delete($id);
        if ($ress) {
            echo '删除成功';
        }else{
            echo '删除失败';
        }
    }

    





}