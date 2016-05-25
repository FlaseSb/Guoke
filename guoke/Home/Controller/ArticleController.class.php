<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    //文章详情页,评论
    public function index(){
        //过滤id
        $id=I('get.id');
        //实例化表
        $user=M('sc_article');
        //查询
        $res = $user->field('Class_Pid,sc_article.id,Time,Title,Class_Title,Content,User_Id,User_Nickname')->join('left join user_info on sc_article.User_Id = user_info.U_PID')->join('left join sc_class on sc_article.Fid= sc_class.id')->where('sc_article.id='.$id)->order('sc_article.id desc')->limit($number,$num)->select();
        // 转换数据中的文本和时间
        foreach ($res as $k => $v) {
            $res[$k]['Content']=htmlspecialchars_decode($res[$k]['Content']);
            if (date('Ymd',$res[$k]['Time'])==date('Ymd')) {
                $res[$k]['Time']=date('今天H:i',$res[$k]['Time']);
            }elseif (date('Ymd',$res[$k]['Time'])==date('Ymd',time()-86400)) {
                $res[$k]['Time']=date('昨天H:i',$res[$k]['Time']);
            }elseif (date('Ymd',$res[$k]['Time'])==date('Ymd',time()-172800)) {
                $res[$k]['Time']=date('前天H:i',$res[$k]['Time']);
            }else{
                $res[$k]['Time']=date('m-d H:i',$res[$k]['Time']);
            }
            if ($v['Class_Pid']!=0) {
                $userc=M('sc_class');
                $vals=$userc->field('id','Class_Title')->where('id='.$v['Class_Pid'])->select();
                $res[$k]['pcname']=$vals[0]['Class_Title'];
                    }
                }
        //二维变一维
        $res=$res[0];
        //查询该作者其他文章
        $other=$user->field('sc_article.id,Title')->where('User_Id='.$res['User_Id'])->select();
        //只取其中5篇文章
        $other=array_chunk($other,5)[0];
        // var_dump($other);
        // die;
        // var_dump($id);
        // var_dump($_GET);
        // var_dump($res);
        // die;
        //未登录时文本框
        // $notext='<div class="reply-box"><p class="reply-info">请 <a rel="nofollow" href="javascript: void 0;" data-login="yes">登录</a> 发表评论</p></div>';
        // //登录时文本框
        // $yestext='<script id="editor" type="text/plain" style="width:638px;height:300px;"></script>
     //        <button style="border:1px solid green;background:#47B5E7;width:100px;height:30px;line-height:25px;cursor:pointer;margin-top:10px;" type="submit"><span class="icon-write"></span>发表</button>';
        // //利用SESSION判断是否登录
        // if (!empty($_SESSION['user'])) {
        //  // 未登录显示跳转登录,禁用文本框
        //  $this->assign('notext',$notext);
        // } else {
        //  // 登录显示百度文本编辑器
        //  $this->assign('yestext',$yestext);
        // }
        

        



        //变量赋值到前台
        $this->assign('other',$other);
        $this->assign('res',$res);
        //解析模板
        $this->display();
    }
    //评论上传
    public function upload(){
        //接收POST,增加一个时间
        $_POST['Cm_Time']=Time();
        var_dump($_POST);
        //实例化表
        $user=M('sc_comment');
        $user->create();
        $user->add();



    }
    //AJAX获取评论
    public function ajaxcomment(){
        //实例化表对象
        $article=M('');
    }
}