<?php
namespace app\common;


/**
 * 想要静态调用这个index 使用门面
 */
class Util 
{
	
	public function __construct()
	{
		
	}
	//第一种用设置为静态方法
	public static function index()
	{
		return '静态方法';
	}
	//第二种使用门面模式
	public function index_f()
	{
		return '不是静态方法';
	}
}