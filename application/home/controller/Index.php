<?php  
namespace app\home\controller;

use think\Controller;
use think\Request;
use app\service\IndexService;
/**
 * 商城首页
 */
class Index extends Controller
{
	
	
    private $IndexService;

    //控制初始化
    //第一种
    public function initialize()
    {
        //初始化服务层类
        $this->IndexService = new IndexService();
    }
	public function index()
	{
		return $this->fetch();
	}

	public function getlogininfo()
	{
		$data = [];
		echo json_encode($data);
	}
}