<?php
/**
* @file AbstractApi.php
* 
* @author zhenyangze
* @mail   zhenyangze@gmail.com 
* @time   日  4/23 18:07:54 2017
*/

namespace Base;

/**
 * api模块控制器抽象类
 *
 * @package Base
 */
abstract class Controller_AbstractApi extends \Base\Controller_Abstract {

    /**
     * api控制器直接输出json格式数据，不需要渲染视图
     */
    public function init() {
        \Yaf\Dispatcher::getInstance()->disableView();
    }

}
