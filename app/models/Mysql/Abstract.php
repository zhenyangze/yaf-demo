<?php
/**
 * @file application/models/Mysql/Abstarct.php
 *
 * @author zhenyangze
 * @mail   zhenyangze@gmail.com
 * @time   2017年04月25日 星期二 17时53分56秒
 */
namespace Mysql;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{

    /**
     * 表名
     */
    public $table = null;

    /**
     * 主键
     */
    public $primaryKey = 'id';

    /**
     * 指定是否模型应该被戳记时间
     */
    public $timestamps = false;
}
