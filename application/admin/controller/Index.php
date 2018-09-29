<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use Config;

class Index extends Controller
{
    /**
     *
     */
    public function index()
    {
        //
        dump(Config::get('config.'));

    }
}
