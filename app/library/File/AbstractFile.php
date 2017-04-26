<?php
/**
* @file File/AbstractFile.php
* 
* @author zhenyangze
* @mail   zhenyangze@gmail.com 
* @time   2017年04月26日 星期三 13时19分25秒
*/
namespace File;

class AbstractFile {

    public function __clone() {
        trigger_error("Not allow clone!");
    }
}