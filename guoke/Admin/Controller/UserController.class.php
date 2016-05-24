<?php
namespace Admin\Controller;
use Think\Controller;
//后台的用户管理控制器.
class UserController extends CommonController {
	//用户列表显示板块
    public function index(){
        
    	$this->display();
    }

    //用户添加显示板块
    public function add(){
    	if(IS_POST){
    		var_dump($_POST);
    	}else{
    	//用户的添加页面显示
        //
    	$this->display();
    	}
    }






}