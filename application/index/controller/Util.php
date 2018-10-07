<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use Utilf;

class Util extends Controller
{
    
    protected $middleware = [
       // \app\http\middleware\AuthMiddleware::class
        'AuthMiddleware' =>  ['only'=>
            [
                'index',
            ]
        ],

    ];


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
    public function demo()
    {
        echo "string";
    }

}
