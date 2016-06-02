<?php
namespace Home\Controller;
use Think\Controller;

class PublicController extends Controller{


	public function _initialize(){
			// var_dump($_COOKIE);
			// var_dump($_SESSION);
     		$name = $_COOKIE['HomeUser_User_Nickname'];
			//¼ì²â
			if(!empty($name)){
				$u=M('UserVerify');
				$where="i.`User_Nickname`='".$name."' and a.`User_Pwd`='".$_COOKIE['HomeUser_User_Pwd']."'";
        		$res=$u->alias('a')->join('User_info as i ON a.U_id=i.U_PID')->where($where)->select();
        		// var_dump($res);
        		// die;
        		if($res){
				$this->assign('msgg','true');
        		}
			}

			if(!empty($_SESSION['Home'])){
				$this->assign('msgg','true');
			}


			$u=$_COOKIE['HomeUser_User_Uid'];

			if(empty($u)){
	         $u=$_SESSION['Home']['Uid'];
	     	}
			$Dao=M();
			$touxiang=$Dao->query("select User_pic from User_profile where `U_PID`='".$u."' and State=1");
			$this->assign('tou',$touxiang[0]['User_pic']);
	}

	// public function index(){
	// 	$u=$_COOKIE['HomeUser_User_Uid'];

 //       if(empty($u)){
 //           $u=$_SESSION['Home']['Uid'];
 //       }
		
	// }

	public function OutUser(){
		$r=cookie(null,'HomeUser_');
		$s=session(null); 
		if($r||$s){
			$this->ajaxReturn('1');
		}
	}



}