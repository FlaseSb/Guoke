<?php
namespace Home\Controller;
use Think\Controller;
<<<<<<< HEAD
class GroupController extends Controller {
    public function index(){
    	var_dump($_COOKIE);
=======
class GroupController extends PublicController {
    public function index(){
    	// var_dump($_COOKIE);

>>>>>>> 588a3fdb7fbf905acca9ee8c6432c710a590faa5
    	$this->display();
    }
}