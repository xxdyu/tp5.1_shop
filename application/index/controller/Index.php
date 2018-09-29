<?php
namespace app\index\controller;
use Config;

class Index
{
    public function index()
    {
        //dump(Config::get());.
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
