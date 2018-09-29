<?php
namespace app\common\facade;

use think\Facade;
/**
 * 想要静态调用这个index 使用门面
 */
/**
 * 代理类
 */
class UtilFacade extends Facade
{
	//在common.php中配置则不需要写下面的
	/*//继承Facade的这个方法
	 protected static function getFacadeClass()
    {
    	return \app\common\Util::class;
    }*/
}