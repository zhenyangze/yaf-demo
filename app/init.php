<?php
/**
 * @file application/init.php
 *
 * @author zhenyangze
 * @mail   zhenyangze@gmail.com
 * @time   日  4/23 17:25:02 2017
 */
date_default_timezone_set("Asia/Shanghai");
mb_internal_encoding("UTF-8");

switch (ini_get('yaf.environ')) {
case 'DEV':
case 'TEST':
    error_reporting(E_ALL ^E_NOTICE);
    $logFile = ROOT_PATH.'/log/php/'.date('Y-m-d').'.log';

    if (!file_exists($logFile)) {
        touch($logFile);
    }

    ini_set('yaf.cache_config', 1);
    ini_set('display_errors', 'off');
    ini_set('log_errors', 'on');
    ini_set('error_log', $logFile);
    break;

case 'PRODUCT':
    error_reporting(E_ALL ^E_NOTICE);
    $logFile = ROOT_PATH.'/log/php/'.date('Y-m-d').'.log';

    if (!file_exists($logFile)) {
        touch($logFile);
    }

    ini_set('yaf.cache_config', 1);
    ini_set('display_errors', 'off');
    ini_set('log_errors', 'on');
    ini_set('error_log', $logFile);
    break;
}
