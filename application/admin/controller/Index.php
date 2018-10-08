<?php

namespace app\admin\controller;

use think\Controller;
use app\model\User;
use app\model\UserRole;
use Request;
use Config;
use Db;
class Index extends Controller
{
    /**
     *
     */
    public function index()
    {
        //
        //dump(Config::get());

    }

    public function dbCon()
    {
    	//动态链接
    	//db_config1被指信息写在配置文件中
    	dump(Db::connect('db_config1')->table('tp_user')->select());
    	//配置在config/database
    	dump(Db::connect('db_config2')->table('tp_user')->select());
    }

    public function curd()
    {
    	//用户名
    	//手机号
    	//邮箱
    	//账号
    	/*dump(Db::connect('db_config2')
    		->table('tp_user')
    		//->where('user_name','=','lg')
    		->where('role_id','<>','2')
    		->select());*/
    	//批量新增

    // $data = [
    // 		['name'=>'apc_add','pass'=>'123456S'],
    // 		['name'=>'apc_add','pass'=>'123456S'],
    // 		['name'=>'apc_add','pass'=>'123456S'],
    // 		['name'=>'apc_add','pass'=>'123456S'],
    // 		['name'=>'apc_add','pass'=>'123456S'],	
    // 	];	
    // 	$res = Db::table('insert')->insertAll($data);

	
    //递增inc('money','1000');
    	// $res = Db::table('insert')->inc('money','1000')->update();
     //递增setInc('money','1000');
    	// $res = Db::table('insert')->where('id','2')->setInc('money','100');
    	//主要是在数据量大的时候，批量查询
    /*	Db::table('tp_module')->chunk(100,function(){


    	});*/

    	//大量新增使用队列，（分割数组）


    }

    //模型操作
    public function model()
    {
    	// dump(User::where('uid',63)->field('uid')->select());
    	$data = [
            ['role_name' => 'ceshi'],
            ['role_name' => 'ceshi'],
            ['role_name' => 'ceshi'],
    		['role_name' => 'ceshi'],
    	];
    	$userRole = new UserRole();

        //单个新增
        //$userRole->save($data);

        //批量化新增
    	$userRole->saveAll($data);


    }

    public function contact()
    {
        //一对一查询
        $userRole = User::get(63);
        dump($userRole->userOnerole);
    }
}
