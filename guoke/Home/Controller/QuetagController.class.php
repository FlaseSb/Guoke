<?php
namespace Home\Controller;
use Think\Controller;
class QuetagController extends Controller {
    public function index(){
        $subtag=M('qac_tag');
        // 接收get值
        $is_hot=!empty($_GET['is_hot'])?$_GET['is_hot']:1;
        $state=$_GET['state'];
        
        // 判断state是否为空
        if(!empty($state)){
            $where="state"
            $res=$subtag->where("state =$state")->order('sub_num desc')->select();
        }else{
            // 查询
            $res=$subtag->where('state !="1" and is_hot="1"')->order('sub_num desc')->select();
        }

        // 查询满足条件总记录数
        $count=$sub->where("is_examine='1'".$where)->count();
        //实例化分页类
        $page=new \Think\Page($count,$num);
        // 获取limit参数
        $limit=$page->firstRow.','.$page->listRows;

        $res=$sub->where("is_examine='1'".$where)->order($order)->limit($limit)->select();

        // var_dump($res);die;
        // 分页输出
        $pages=$page->show();

        $this->assign('res',$res);

        // $this->display();
        
    }
    
}
