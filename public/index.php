<?php

if(PHP_SAPI != 'cli'){
    define('ROOT_PATH', "/home/www/yaf-admin");
}else{
    $strLib = str_replace("/lib", "", ini_get('yaf.library'));
    define("ROOT_PATH", $strLib);
}
define('APP_PATH',  ROOT_PATH."/admin");
$app = new Yaf\Application(APP_PATH."/conf/application.ini");

$app->bootstrap()->run();
