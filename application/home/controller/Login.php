<?php
namespace app\home\controller;

use think\Controller;
use Request;
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
		
		if(Request::isPost()){
			//处理登录业务
			$data = array();
			if($this->LoginService->checkLogin(Request::param())){
				//模仿ajax返回
				$data['code'] = 2;
				echo  json_encode(['code'=>1]);die;
				echo  json_encode($data = ['code'=>1]);die;
				echo  json_encode($data['code'] = 1);die;
			}else{
				$data['code'] = 1;
				echo json_encode(['code'=>1]);die;
			}

			
		}
		
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