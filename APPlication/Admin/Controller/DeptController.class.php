<?php
//定义命名空间
namespace Admin\Controller;
//引入命名空间
use Think\Controller;
class DeptController extends Controller {
	//信息管理
	public function index(){
		$dept = D('Dept');
		$data = $dept->select();
		$this->assign('data',$data);
		$this->display();
	}
	//信息添加
	public function add(){
		$dept = D('Dept');
		$data = $dept->select();
		$this->assign('data',$data);
		$this->display();
	}
	public function addok(){
		if(IS_POST){
			//实例化模型
			$dept = D('Dept');
			//获取POST数据
			$dept->create();
			//录入数据
			if($dept->add()){
				$this->success('添加成功','index',3);
			}else{
				$this->error('添加失败');
			}
		}
	}
	//修改
	public function edit($id){
		$dept = D('Dept');
		$list = $dept->select();
		$this->assign('list',$list);
		$data = $dept->find($id);
		$this->assign('data',$data);
		$this->display();
	}
	public function editok(){
		if(IS_POST){
			$dept = D('Dept');
			$i = $dept->create();
			if($dept->save()){
				$this->success('修改成功','index',3);
			}else{
				$this->error('修改失败');
			}
		}
	}
	//删除
	public function del($id){
		$dept = D('Dept');
		if($dept->delete($id)){
			$this->success('删除成功',"/index.php/Admin/Dept/index",3);
		}else{
			$this->error('删除失败');
		}
	}
}