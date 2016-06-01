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
        // 接收用户id
        // $uid=$_SESSION['Home']['Uid'];
        // 接收post数据
        $arr['sub_name']=!empty($_POST['question'])?$_POST['question']:die;
        $arr['sub_msg']=$_POST['sub_msg'];

        // 接收标签id
        $tagid=$_POST['tags'];

        $tanswer=M('qac_tag_answer');
        $model=M();
        $tag=M('qac_subject');
        // 添加问题
        $res=$tag->add($arr);
        if(!empty($tagid)){
            $tagarr=explode(',',$tagid);
            $count=count($tagarr);
            for ($i=0; $i <= $count-1; $i++) { 
                // 问题id
                $data['sub_id']=$res;
                // 标签id
                $data['tag_id']=$tagarr[$i];
                //增加该标签问题数
                $model->execute("update qac_tag set sub_num=sub_num+1 where tag_id='$tagarr[$i]'");
                //插入到表中
                $tanswer->add($data);
            }
        }
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
