<?php
namespace app\home\controller;

use think\Controller;
use think\Request;
use app\service\LoginService;
/**
 * 商城首页
 */
class Login extends Controller
{
	
	private $LoginService;

    //控制初始化
    //第一种
    public function initialize()
    {
        //初始化服务层类
        $this->LoginService = new LoginService();
    }
	public function index()
	{
		return $this->fetch('login');
	}

	public function register(Request $Request)
	{
		$loginData = $Request->param();
		//在服务层doRe()处理注册业务
		if($res = $this->LoginService->doRe($loginData)){
			dump($res);
		}else{
			return $this->fetch();
		}
		
	}

	public function email()
	{
		return $this->fetch();
	}
} 