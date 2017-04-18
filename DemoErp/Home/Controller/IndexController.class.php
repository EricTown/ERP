<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController
{
    public function index()
    {
        $this->display();
    }
//获取系统信息参数
    public function gsys()
    {
        echo '<pre>';
        print_r($_SERVER);
        echo '<br>';
        echo '日期:'.date('Y-m-d H:i:s',time());
    }
}