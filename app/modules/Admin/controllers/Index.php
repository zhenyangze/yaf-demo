<?php
/**
* @file application/modules/Admin/controllers/Index.php
* 
* @author zhenyangze
* @mail   zhenyangze@gmail.com 
* @time   日  4/23 23:38:08 2017
*/
class IndexController extends \Core\Controller_AbstractAdmin {
    public function IndexAction() {
        echo 'Admin';exit;
    }

    public function loginAction() {
        echo 'login';
        exit;
    }
}
