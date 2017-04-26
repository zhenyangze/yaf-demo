<?php
/**
* @file application/library/Function/Array.php
*
* @author zhenyangze
* @mail   zhenyangze@gmail.com
* @time   2017年04月26日 星期三 10时50分55秒
*/

/**
 * 通用函数
 */
/**
 * 获取数组中的某列的值
 * PHP < 5.5.0  兼容5.5之前版本
 * @param $input 二维数组
 * @param $column_key 取出哪列作为新数组的值
 * @param $index_key 取出哪列作为新数组的键
 * @return array
 * @author gengxl <gengxl@51talk.com>
 */
if (!function_exists('array_column')) {
    function array_column($input, $column_key, $index_key = null)
    {
        if ($index_key !== null) {
            $keys = array();
            $i    = 0;
            if (!empty($input) && is_array($input)) {
                foreach ($input as $row) {
                    if (array_key_exists($index_key, $row)) {
                        if (is_numeric($row [$index_key]) || is_bool($row [$index_key])) {
                            $i = max($i, (int) $row [$index_key] + 1);
                        }
                        $keys [] = trim($row [$index_key]);
                    } else {
                        $keys [] = $i ++;
                    }
                }
            }
        }
        if ($column_key !== null) {
            $values = array();
            $i      = 0;
            if (!empty($input) && is_array($input)) {
                foreach ($input as $row) {
                    if (array_key_exists($column_key, $row)) {
                        $values [] = $row [$column_key];
                        $i ++;
                    } elseif (isset($keys)) {
                        array_splice($keys, $i, 1);
                    }
                }
            }
        } else {
            $values = array_values($input);
        }
        if ($index_key !== null) {
            return array_combine($keys, $values);
        }
        return $values;
    }
}
