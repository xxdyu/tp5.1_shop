<?php
namespace app\service;
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
	
}
