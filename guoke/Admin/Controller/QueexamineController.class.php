<?php
namespace Admin\Controller;
use Think\Controller;
//后台的问题审核管理控制器.
class QueexamineController extends CommonController {
	//问题审核列表显示板块
    public function index(){
        // 接收数据
        $name=$_GET['name'];
        $state=$_GET['num'];
        $sub=M('qac_subject');
        // 获取显示数量
        $num=!empty($_GET['page'])?$_GET['page']:5;
        //获取关键字
        if(!empty($_GET['keyword'])){
            $where=" and sub_name like '%".$_GET['keyword']."%'";
        }else{
            $where="";
        }
        $order="'id asc'";
        if(!empty($name) && $state==null){
            $order=$name.' desc';
            $state=1;
        }elseif($state==1){
            $order=$name.' asc';
            $state=null;
        }
        // 查询满足条件总记录数
        $count=$sub->where("is_examine='0'".$where)->count();
        //实例化分页类
        $page=new \Think\Page($count,$num);
        // 获取limit参数
        $limit=$page->firstRow.','.$page->listRows;

        $res=$sub->join('left join user_verify on qac_subject.user_id = user_verify.U_id')->where("is_examine='0'".$where)->order($order)->limit($limit)->select();
        foreach ($res as $k => $v) {
            $res[$k]['sub_name']=str_replace(keyword(),highlight(),$v['sub_name']);
        }
        // var_dump($res);die;
        // 分页输出
        $pages=$page->show();

        // var_dump($page);die;
        $this->assign('state',$state);
        $this->assign('pages',$pages);
        $this->assign('num',$num);
        $this->assign('res',$res);
    	$this->display();
    }

    // ajax通过模块
    public function adopt(){
        // 设置通过
        $is_examine['is_examine']=1;

        $id=$_GET['id'];
        $sub=M('qac_subject');
        //执行修改
        $res=$sub->where('id='.$id)->save($is_examine);
        header('location:'.$_SERVER['HTTP_REFERER']);

    }

    // ajax详细描述模块
    public function ajaxdetailed(){
        // 获取id
        $id=$_GET['id'];
        $sub=M('qac_subject');
        $res=$sub->where('id='.$id)->select();
        // var_dump($res);
        //将sub_msg转换为实体;
        $sub_msg=htmlspecialchars_decode($res['0']['sub_msg']);

        echo $sub_msg;
        // $this->display();

    }

    // 问题删除模块
    public function ajaxdel(){
        // 接收id
        $id=$_GET['id'];
        
        $sub=M('qac_subject');

        // 执行删除
        $res=$sub->where('id='.$id)->delete();

        // 判断是否删除
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
}