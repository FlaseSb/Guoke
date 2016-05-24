<?php
namespace Home\Controller;
use Think\Controller;
class GroupController extends Controller {
    public function index(){
    	var_dump($_COOKIE);
    	$this->display();
    }
}