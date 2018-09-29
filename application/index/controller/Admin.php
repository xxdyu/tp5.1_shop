<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\Cj_user;

use think\Db;

class Admin extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //单条查询 
      // Db::table('cj_user')->find(2);
        //dump(Db::table('cj_user')->select());
        Db::table('cj_user')->where([
            ['uid','=','1'],

        ])->select();
         Db::table('cj_user')->where('uid','=','1')->select();
         /*dump(Db::table('cj_user')->where('uid','<','10')->whereOr('uid','>','5')->select());*/
          dump(Db::table('cj_user')->where('uid','<','10')->where('uid','>','5')->select());


    }
    public function models()
    {
        //dump(Cj_user::all());
        dump(Cj_user::where('uid','=','1')->find());
    }
}
