<?php
/**
 * @file Abstract.php
 * 
 * @author zhenyangze
 * @mail   zhenyangze@gmail.com 
 * @time   2017年04月25日 星期二 14时53分01秒
 */
namespace Service;

/**
 * 业务层抽象
 */
abstract class AbstractModel {
    /**
     * 禁止克隆 
     *
     * @return 
     */
    public function __clone() {
        trigger_error("Clone is not allow!");
    }
}