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
        
        $validate = new \app\service\FormService;

        if (!$validate->check($data)) {
            return $validate->getError();
        }
        return $data;

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
	
}
