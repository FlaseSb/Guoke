<?php
namespace Home\Controller;
use Think\Controller;
class GroupController extends PublicController {
    public function index(){
    	// var_dump($_COOKIE);
    	$this->display();
    }
}