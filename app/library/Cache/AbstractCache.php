<?php
/**
* @file Cache/AbstractCache.php
*
* @author zhenyangze
* @mail   zhenyangze@gmail.com
* @time   2017年04月26日 星期三 13时19分25秒
*/
namespace Cache;

class AbstractCache
{
    public function __clone()
    {
        trigger_error("Not allow clone!");
    }
}
