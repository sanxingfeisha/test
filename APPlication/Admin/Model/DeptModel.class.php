<?php
//定义命名空间
namespace Admin\Model;
//引入命名空间
use Think\Model;
class DeptModel extends Model {
	//定义主键
	protected $pk = 'id';
	//定义字段
	protected $fields = array('id','name','pid','remark');
	//定义字段映射
	protected $_map = array(
		'dept_pid'=>'pid',
		'dept_name'=>'name',
		'dept_remark'=>'remark'
	);
	//指定关联的表名称
	//protected $trueTableName = 'dept';
	//protected $tableName = 'depts';
}