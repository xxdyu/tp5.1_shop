<?php 


namespace app\behavior;


/**
 * 
 */
class DemoBehavior 
{
	public function run($v)
	{
		//行为钩子
		echo '行为钩子'.$v;
	}
}