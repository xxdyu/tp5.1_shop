<?php
namespace app\Validate;
use think\Validate;
/**
 * 
 */
class TokenVi extends Validate
{
	 protected $rule =   [
	 	'user_name'=>'require|token',
    ];
}

