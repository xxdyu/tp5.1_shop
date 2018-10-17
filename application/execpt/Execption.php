<?php
namespace app\execpt;

use think\exception\Handle;
use Exception as Ex;



/**
 * 
 */
class Execption extends Handle
{
	public function render(Ex $e)
    {
        /*// 参数验证错误
        if ($e instanceof ValidateException) {
            return json($e->getError(), 422);
        }

        // 请求异常
        if ($e instanceof HttpException && request()->isAjax()) {
            return response($e->getMessage(), $e->getStatusCode());
        }*/

        // 其他错误交给系统处理
        return parent::render($e);
        //return  \redirect('index');
    }
}