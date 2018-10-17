<?php

namespace app\http\middleware;

use Request;
/**
 * 使用中间节验证登录参数
 */
class LoginMiddleware
{
    public function handle($request, \Closure $next)
    {
    	//检验是不是ajax请求
    	if (!Request::isAjax()) {
    		return json(['message'=>'不是ajax请求','code'=>403]);die;
        }
        //检验是不是post请求
    	if (!Request::isPost()) {
    		return json(['message'=>'不是post请求','code'=>403]);die;
        }
        //使用验证器验证参数和token
    	$validate = new \app\Validate\TokenVi;
        if (!$validate->check(Request::param())) {
            return json(['message'=>$validate->getError(),'code'=>403]);
    	}
    	return $next($request);
    }
}
