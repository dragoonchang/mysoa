<?php
namespace app\center\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{
    /**
     * 首页
     */
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 服务查询
     */
    public function queryService(){

    }

    /**
     *
     */
}