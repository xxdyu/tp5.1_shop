<?php
namespace app\home\controller;

use think\Controller;
use Request;
use app\service\LoginService;
use Cookie;
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

	/*public function register()
	{
		$loginData = Request::param();
		//在服务层doRe()处理注册业务
		$res = $this->LoginService->doRe($loginData);
		//判断是否发生了异常并返回错误信息
		if(isset($res['stu'])) return json($res['data']);
		
	}*/

	public function email()
	{
		return $this->fetch();
	}

	public function doLogin()
	{
		$loginData = Request::param();
		//在服务层doRe()处理注册业务
		$info = $this->LoginService->checkDoLogin($loginData);
		if(!isset($info['userInfo'])){
			//直接的返回错误信息
			return json($info);die;
		}
		//存入cookie
		Cookie::set('user_info',$info,3600);
		return json($info);


	}
} 