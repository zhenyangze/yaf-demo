<?php
/**
* @file cli.php
* 
* @author zhenyangze
* @mail   zhenyangze@gmail.com 
* @time   2017年04月26日 星期三 09时44分17秒
*/
define("ROOT_PATH", realpath(dirname(__FILE__) . '/../'));
define("APP_PATH", ROOT_PATH  . '/app');

require APP_PATH.'/init.php';

$app = new \Yaf\Application(ROOT_PATH . "/conf/application.ini", ini_get('yaf.environ'));
$app->bootstrap()->getDispatcher()->dispatch(new \Yaf\Request\Simple("Cli"));
