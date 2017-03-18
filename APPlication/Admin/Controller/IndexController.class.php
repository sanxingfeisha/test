<?php
namespace Admin\Controller;
//引入核心控制器
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		$this->display();
	}
	/* public function sessa(){
		load('@/user');
		tree();
	} */
	public function ctt(){
		app();
	}
}