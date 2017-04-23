<?php

/**
 * Bootstrap引导程序
 * 所有在Bootstrap类中定义的, 以_init开头的方法, 都会被依次调用
 * 而这些方法都可以接受一个\Yaf\Dispatcher实例作为参数.
 */
class Bootstrap extends \Yaf\Bootstrap_Abstract {

    /**
     * 把配置存到注册表
     */
    public function _initConfig() {
        $config = \Yaf\Application::app()->getConfig();
        \Yaf\Registry::set('config', $config);
    }

    /**
     * 路由规则定义，如果没有需要，可以去除该代码
     * 
     * @param \Yaf\Dispatcher $dispatcher
     */
    public function _initRoute(\Yaf\Dispatcher $dispatcher) {
        $config = new \Yaf\Config\Ini(APP_PATH . '/conf/route.ini', 'common');
        if ($config->routes) {
            $router = \Yaf\Dispatcher::getInstance()->getRouter();
            $router->addConfig($config->routes);
        }

        $router = \Yaf\Dispatcher::getInstance()->getRouter();

        // rewrite
        $route = new \Yaf\Route\Rewrite(
            '/article/detail/:articleID',
            array(
                'controller' => 'article',
                'action'     => 'detail',
            )
        );

        $router->addRoute('rewrite', $route);

        // rewrite_category
        $route = new \Yaf\Route\Rewrite(
            '/article/detail/:categoryID/:articleID',
            array(
                'controller' => 'article',
                'action'     => 'detail',
            )
        );

        $router->addRoute('rewrite_category', $route);

        // regex
        $route = new \Yaf\Route\Regex(
            '#article/([0-9]+).html#',
            array('controller' => 'article', 'action' => 'detail'),
            array(1 => 'articleID')
        );

        $router->addRoute('regex', $route);

    }

    /**
     * 获取url.ini配置的地址
     * 
     * @param string $name
     * @return string 
     */
    public static function getUrlIniConfig($name) {
        static $config = null;
        if ($config === null) {
            $config = new \Yaf\Config\Ini(APP_PATH . '/conf/url.ini', ini_get('yaf.environ'));
        }
        $urlConf = $config->get('config.url');
        if ($urlConf === null) {
            throw new \Exception("config.url is not exist");
        }
        if ($urlConf[$name] === null) {
            throw new \Exception("config.url" . $name . " is not exist");
        }
        return $urlConf[$name];
    }

    public function _initPlugin(\Yaf\Dispatcher $dispatcher) {
        //$router = new RouterPlugin();
        //$dispatcher->registerPlugin($router);
    }

}
