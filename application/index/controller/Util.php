<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use Utilf;

class Util extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
       // echo Utilf::index();
        echo Utilf::index_f();
    }

}
