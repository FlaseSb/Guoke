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
			// var_dump($_SESSION);
	}

	public function OutUser(){
		$r=cookie(null,'HomeUser_');
		$s=session(null); 
		if($r||$s){
			$this->ajaxReturn('1');
		}
	}

    //查询帖子回复等信息
    public function ajaxinformation(){
        //过滤接收用户ID
    	// var_dump($_POST);
        $id=I('post.id');
        //接收要忽略的ID标志
        $j=I('post.j');
        //如果此标志为空
        if (empty($j)) {
        	$where='';
        } else {
        	//不为空,去除最后的逗号
        	$j=rtrim($j,',');
        	//组合进WHERE条件
        	$where=' and sc_comment.id not in ('.$j.')';
        }
        
        //初始化用户表
        //以用户表为基准查询各种对该用户有用的信息
        $user=M('user_verify');
        //查询
        $ationres=$user->field('sc_comment.id,sc_comment.Wid,sc_comment.Cm_Content'/*把其他要查询的字段也写入此*/)->join('left join sc_comment on user_verify.U_id = sc_comment.Uid')/*其他信息再次写入join,以用户表当前用户ID为准*/->where('sc_comment.Pid='.$id.' and sc_comment.Is_Examine=0 and sc_comment.Delete=0'.$where)->select();
        //数据修改成HTML
        foreach ($ationres as $k => $v) {
        	$ationres[$k]['Cm_Content']=strip_tags(htmlspecialchars_decode($v['Cm_Content']));
        }
        //json
    	echo json_encode($ationres);
    }

    public function ajaxReadInformation(){
        var_dump($_POST);
        $_POST['Is_Examine']=1;
        //实例化评论表
        $comment=M('sc_comment');
        //过滤数据
        $comment->create();
        //更新数据
        $comment->save();                
    }
}