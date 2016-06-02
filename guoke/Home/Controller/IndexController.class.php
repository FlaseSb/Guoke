<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends PublicController {
    public function index(){
    	var_dump($_COOKIE);
    	var_dump($_SESSION);
    	$this->display();
    }
}