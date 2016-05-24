<?php
namespace Home\Controller;
use Think\Controller;
class QuestionController extends Controller {
    public function index(){
        $sub=M('qac_subject');
        // 等待回答问题
        $wait=$sub->where('is_examine=1 and answer_num>1')->order('sub_time desc')->limit(8)->select();
        // 热门问题
        $hot=$sub->where('is_hot=1')->order('sub_time desc')->limit(10)->select();
        // 精彩问题
        $wonderful=$sub->where('is_wonderful=1')->order('sub_time desc')->limit(10)->select();

        $this->assign('wait',$wait);
        $this->assign('hot',$hot);
        $this->assign('wonderful',$wonderful);

        $this->display();
        
    }
    public function insert(){
        var_dump($_POST);
    }
    // 添加问题标签
    public function addtag(){
       $data['tag_name']=!empty($_POST['tag_name'])?$_POST['tag_name']:die;

        $tag=M('qac_tag');
        // 查询是否有该标签名
        $res=$tag->where($data)->select();
        if($res){
            echo $res[0]['tag_id'];
        }else{
            $num=$tag->add($data);
            echo $num;
        }
    }

}
