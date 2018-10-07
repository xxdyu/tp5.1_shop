<?php
namespace app\service;
use think\Validate;
/**
 * 
 */
class FormService extends Validate
{
	 protected $rule =   [
	 	'__token'=>'token',
    ];
}

