<?php

namespace ZX\Algorithm;

/*
 * bitmap算法
 */

final class BitMap {

    //最大容量数,大约1亿3，根据自己的需求修改
    private static $max = 1 << 27;
    //储存数据的变量
    private static $data = [];

    public static function addValue(int $n) {
        //row = n / 32 求十进制数在数组a中的下标
        $row = $n >> 5;
        //相当于 n % 32 求十进制数在数组a[i]中的下标 0x1F=31
        self::$data[$row] = 1 << ($n % 0x1F);
    }

    // 判断所在的bit为是否为1
    public static function booleanExits(int $n) {
        $row = $n >> 5;
        return (self::$data[$row] & ( 1 << ($n % 0x1F))) != 1;
    }

    public static function display(int $row) {
        
    }

    public static function getData() {
        return self::$data;
    }

}
