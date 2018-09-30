<?php
namespace app\index\controller;
use Config;
use app\service\IndexService;
use think\Controller;
use Hook;

class Index extends Controller
{

    protected $beforeActionList = [
        //前置操作
       // 'index' =>  ['except'=>'hello'],
        //'login'  =>  ['only'=>'index'],
    ];
    //处理service类  进行存放

    private $IndexService;

    //控制初始化
    //第一种
    public function initialize()
    {
        //初始化服务层类
        $this->IndexService = new IndexService();
    }
   //第2种
  /*  public function __construct($value='')
    {
        # code...
        parent::__construct();
         $this->IndexService = new IndexService();
    }*/

    //空方法的处理，捕捉请求异常
    //存在实行次方法，没有抛出异常

    public function _empty()
    {
        # code...
        return 1;
    }


    public function login()
    {
       //行为钩子
      /* Hook::exec(\app\behavior\DemoBehavior::class,'nihao');*/
        # code...
       //return  $this->fetch();
        echo 'sadsa';
        /*Hook::exec(\app\behavior\DemoBehavior::class);
        */
    }


    public function index()
    {
        dump(Config::get());
    }

    public function hello($name)
    {
        return 'hello,' . $name;
    }

    public function getConf()
    {
    	
    	//获取全部配置
    	//dump(Config::get(''));

    	//获取指定配置
    	//dump(Config::get('cache.type'));

    	//动态配置
    	//dump(Config::set('cache.type','redis'));

    	//dump(Config::get('cache.type'));

    	//多配置
    	/*dump(Config::set([
    		  'type'   => 'File',
    			// 缓存保存目录
    		  'path'   => '//',
    			// 缓存前缀
    		  'prefix' => '--',
    		// 缓存有效期 0表示永久缓存
    		  'expire' => 0,
    		],'cache'));*/
    	//配置优先级
    	//	动态配置 》 模块配置 》 应用配置 》 惯例配置
    }
}
