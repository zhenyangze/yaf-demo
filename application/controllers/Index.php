<?php/*** @file application/controllers/Index.php* * @author zhenyangze* @mail   zhenyangze@gmail.com * @time   日  4/23 18:41:34 2017*/class IndexController extends \Base\Controller_AbstractIndex {    public function indexAction() {        $userModel = new \Service\User\UserModel();        $userInfo = $userModel->getUserInfoById(1);        $this->getView()->assign("userInfo", $userInfo);        $this->getView()->assign('hello', 'hello world');        //$postList = \Mysql\Post\PostModel::all();    }}