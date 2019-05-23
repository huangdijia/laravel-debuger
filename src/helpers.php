<?php

use Huangdijia\Debuger\Facades\Debuger;

if (!function_exists('debug')) {
    /**
     * 记录时间（微秒）和内存使用情况
     * @param string            $start 开始标签
     * @param string            $end 结束标签
     * @param integer|string    $dec 小数位 如果是m 表示统计内存占用
     * @return mixed
     */
    function debug($start, $end = '', $dec = 6)
    {
        if ('' == $end) {
            Debuger::remark($start);
        } else {
            return 'm' == $dec ? Debuger::getRangeMem($start, $end) : Debuger::getRangeTime($start, $end, $dec);
        }
    }
}