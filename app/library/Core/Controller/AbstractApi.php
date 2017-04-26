<?php
/**
* @file AbstractApi.php
*
* @author zhenyangze
* @mail   zhenyangze@gmail.com
* @time   日  4/23 18:07:54 2017
*/

namespace Core;

/**
 * api模块控制器抽象类
 *
 * @package Core
 */
abstract class Controller_AbstractApi extends \Core\Controller_Abstract
{

    /**
     * api控制器直接输出json格式数据，不需要渲染视图
     */
    public function init()
    {
        \Yaf\Dispatcher::getInstance()->disableView();
    }
}
