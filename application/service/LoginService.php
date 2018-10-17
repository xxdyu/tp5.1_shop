<?php
namespace app\service;

use app\model\User;
/**
 * 
 */
class LoginService
{
	/**
	 *@ $data 注册数据
	 * 
	 *@处理登陆
	 *
	 */
	public function doRe($data)
	{

	}
	public function outlogin()
	{
		
	}

	public function checkLogin($data)
	{
		$user = new User();

		//处理密码操作

		if ($user->sloveLogin($data)) {
			//信息验证成功后的操作

			
			return true;
		}else{
			return false;
		}
	}

	public function checkDoLogin($data)
	{
		//实例化model类
		$user = new User();
		//检验用户名是否存在
		if(!$user->checkUserName($data['user_name'])){
			return ['message'=>'用户名不存在','code'=>403];die;
		}
		//检验密码是否正确
		$userInfo = $user->checkUserPassword($data['user_name'],$data['user_password']);
		if(!$userInfo){
			return ['message'=>'密码错误','code'=>403];die;
		}else{
			return ['message'=>'登陆成功','code'=>1,'userInfo'=>$userInfo];die;
		}

	}
	
}

