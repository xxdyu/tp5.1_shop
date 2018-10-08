<?php  
namespace app\model;

use think\Model;

/**
 * 偷懒
 	面向对象
 	抽象事物的描述

 */
//用户模型类
class User extends Model
{
	//主键
	protected $pk = 'uid';

	public function userOnerole()
	{
		return $this->hasOne('UserRole','role_id','role_id');
	}

	public function sloveLogin($data)
	{
		//获取登陆信息
		return $this->where('user_name',$data['user_name'])->where('user_password',$data['user_name'])->find();
	}
	
}