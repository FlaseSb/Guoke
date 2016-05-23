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
    public function add(){
        $this->display();
    }
    public function ajaxtag(){
        // 接收问题值
        $question=$_POST['question'];
        $tag=M('qac_tag');

        // 获取字串长度
        $length=strlen($question);
        // 字串分割到数组中
        $ask=str_split($question,3);

        //分配一个数组
        $arr=array();

        // 循环查询,插入到数组中
        for ($i=0; $i <= $length-1 ; $i++) { 
            $arr[]=$tag->where("tag_name like '%$ask[$i]%'")->select();
        }
        $arr=array_unique($arr);
        echo json_encode($arr);

    }
}
