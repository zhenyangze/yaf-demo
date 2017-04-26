<?php
/**
* @file cli.php
* 
* @author zhenyangze
* @mail   zhenyangze@gmail.com 
* @time   2017年04月26日 星期三 09时44分17秒
*/
define("APP_PATH", realpath(dirname(__FILE__) . '/../'));

require APP_PATH.'/application/init.php';

$app = new \Yaf\Application(APP_PATH . "/conf/application.ini", ini_get('yaf.environ'));
$app->bootstrap()->getDispatcher()->dispatch(new \Yaf\Request\Simple("Cli"));
