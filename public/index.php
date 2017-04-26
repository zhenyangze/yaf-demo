<?php
/**
* @file public/index.php
* 
* @author zhenyangze
* @mail   zhenyangze@gmail.com 
* @time   日  4/23 17:18:09 2017
*/
define("APP_PATH", realpath(dirname(__FILE__) . '/../'));

require APP_PATH.'/application/init.php';

$app = new \Yaf\Application(APP_PATH . "/conf/application.ini", ini_get('yaf.environ'));
$app->bootstrap()->run();