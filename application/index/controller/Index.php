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
        //dump(Config::get());

    $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red', 4 => 'green');

  /*  $key1 = array_keys($array,'green'); // $key = 2;
    $key2 = array_search('red', $array);   // $key = 1;
    $count = array_count_values( $array);
    dump($key1);
    dump($key2);
    dump($count);*/


   /* dump(array_shift($array));
    dump($array);
*/
      /*  //返回值是新数组的个数，从开头添加数组
        dump(array_unshift($array,'sdasd'));
        dump($array);*/

      /*  $city  = "San Francisco";
        $state = "CA";
        $event = "SIGGRAPH";
        $arr   = array('aa'=>1); 
        $result = compact("event", "nothing_here", "city", "state","arr");
        dump($result);
    */
    $var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
    extract($var_array);

    echo "$color, $size, $shape";
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
    /**
     * 多为数组排序
     */
    public function moreSort()
    {
        /*$data = [
            ['id'=>1,'name'=>'aa','age'=>12],
            ['id'=>2,'name'=>'bb','age'=>15],
            ['id'=>3,'name'=>'cc','age'=>14],
            ['id'=>4,'name'=>'dd','age'=>11],
        ];
        array_multisort($id,SORT_NUMERIC,SORT_DESC,$data);
        dump($data);*/
        $array[] = array("age"=>20,"name"=>"li");
        $array[] = array("age"=>21,"name"=>"ai");
        $array[] = array("age"=>20,"name"=>"ci");
        $array[] = array("age"=>23,"name"=>"di");
        $array[] = array("age"=>25,"name"=>"di");
        $array[] = array("age"=>26,"name"=>"di");
        $array[] = array("age"=>28,"name"=>"di");
        array_multisort(array_column($array,'age'),SORT_NUMERIC,SORT_DESC,$array);
        dump($array);
    }
    public function getAllMotheds()
    {
       $class = new self;
       $array1 = get_class_methods( $class);
        if ($parent_class = get_parent_class( $class)) {
            $array2 = get_class_methods($parent_class);
            $array3 = array_diff($array1, $array2);
        } else {
            $array3 = $array1;
        }
        dump($array3);
    }
}
