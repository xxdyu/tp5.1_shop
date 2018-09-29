<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use think\Facade;
use think\Loader;
Facade::bind([
	//代理类 =》 被代理的类

	app\common\facade\UtilFacade::class => app\common\Util::class,


]);

//被代理类的别名

Loader::addClassAlias([
	'Utilf' => app\common\facade\UtilFacade::class, 
	//'Cj_user'=> app\index\model\Cj_user::class,

]);
