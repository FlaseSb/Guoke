<?php
namespace Home\Controller;
use Think\Controller;
class WriteController extends Controller {
    public function index(){
    	$user=M('sc_class');
    	//查询顶级分类
        $res=$user->where('Class_Pid=0')->select();
        // var_dump($res);
        // 查询结果赋值给前台
        $this->assign('res',$res);
       $this->display();
    }
    public function ajaxclass(){
    	$user=M('sc_class');
    	//查询顶级分类
    	$pid=I('post.Class_Pid');
        $res=$user->where('Class_Pid='.$pid)->select();
        // var_dump($res);
        if ($res) {
        	echo json_encode($res);
        } else {
        	echo 0;
        }
        
    }
    //文章上传
    public function update(){
    	//获取被匹配的文本
    	$content=$_POST['Content'];
    	//正则表达式
        // var_dump($_POST);
        // die;
    	$regular="/<img .*? src=.*? title=.*?\/>/";
    	//执行正则找图片
    	preg_match($regular,$content,$img);
    	//传入图片
    	$_POST['Img']=$img[0];
    	//传入时间
    	$_POST['Time']=time();
    	//实例化表
    	$user=M('sc_article');
    	//过滤数据
    	$user->create();
    	//插入数据
    	$res=$user->add();
    	//结果集判断
    	if ($res) {
            $this->success('提交成功成功,请等待审核',U('Home/Write/index'),3);
        } else {
            $this->error('添加失败,服务器繁忙,请稍后重试',U('Home/Write/index'),3);
        }
    	

    }
}