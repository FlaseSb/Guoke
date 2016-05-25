<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{


	public function _initialize(){

     		$name = $_COOKIE['HomeUser_User_Nickname'];
			//检测
			if(!empty($name)){
				$u=M('UserVerify');
				$where="i.`User_Nickname`='".$name."' and a.`User_Pwd`='".$_COOKIE['HomeUser_User_Pwd']."'";
        		$res=$u->alias('a')->join('User_info as i ON a.U_id=i.U_PID')->where($where)->select();
        		if($res){
				$this->assign('msg','true');
        		}
			}
			if(!empty($_SESSION['Home'])){
				$this->assign('msg','true');
			}

	}





}