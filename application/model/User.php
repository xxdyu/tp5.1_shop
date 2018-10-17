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
	//用户名的查询验证
	public function checkUserName($user_name)
	{
		return $this->where('user_name',$user_name)->find();
	}
	//用户名的查询验证用户名和密码的验证
	public function checkUserPassword($user_name,$user_password)
	{
		return $this->where('user_name',$user_name)->where('user_password',$user_password)->find();
	}
	
}