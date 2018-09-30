<?php

namespace app\http\middleware;
use Log;

class AuthMiddleware
{
    public function handle($request, \Closure $next)
    {
    	if (!$request->param('token')) {
    		Log::write('登录失败');
    		//return \redirect("index\index\index");
    	}
    	
    	return $next($request);
    }
}
