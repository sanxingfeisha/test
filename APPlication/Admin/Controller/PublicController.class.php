<?php
//定义命名空间
namespace Admin\Controller;
//引入核心控制器
use Think\Controller;
use Admin\Model\ProvinceModel;
class PublicController extends Controller{
	public function login(){
		//通过方法获取模板内容
		//$str = $this->fetch();
		//file_put_contents('./html/login.html', $str);
		//通过display方法输出模板内容
		$this->display();
	}
	public function check(){
		//接受用户信息
		$username = addslashes($_POST['username']);
		$password = addslashes($_POST['password']);
		//判断账号密码是否为空
		if(empty($username) || empty($password)){
			$this->error('账号或密码不能为空');
			exit;
		}
		//判断账号密码是否正确
		if($username==admin && $password==123456){
			$this->success('登录成功','/index.php/Admin/Index/index',3);
		}else{
			$this->error('密码错误');
		}
	}
	public function home(){
		$this->display();
	}
	public function verify(){
		$verify = new \Think\Verify();
		$verify->entry();
	}
}