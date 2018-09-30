<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('hello/:name', 'index/hello');
Route::post('hello/:name', 'index/hello');
Route::rule('hello/:name', 'index/hello');


//路由组

Route::group('index',function(){
	Route::get('index','index/index/index');
	Route::get('admin','index/admin/index');
	Route::get('test','index/test_login/index');
	Route::get('util','index/util/index');
	Route::get('models','index/admin/models')->middleware('AuthMiddleware');
});



//静态注册
/*return [

];*/
//注解注册(调试下才启效果)
//开启'app_debug' = true;
//  'route_annotation'=> true,
