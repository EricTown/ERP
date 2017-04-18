<?php
//检查PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
//开启调试模式
 define("APP_DEBUG",true);
//项目路径
 define("APP_PATH","./DemoErp/");
//引入框架
 require('ThinkPHP/ThinkPHP.php');


?>