<?php

namespace ZX\Algorithm;

/*
 * bitmap算法
 * 参考 https://www.cnblogs.com/senlinyang/p/7885685.html
 */

final class BitMap {

    //int 位数
    private static $phpIntSize = PHP_INT_SIZE;
    //int最大值  Usually int(2147483647) in 32 bit systems and int(9223372036854775807) in 64 bit systems. Available since PHP 5.0.5
    private static $phpIntMax = PHP_INT_MAX;
    //最大位数64位 1 << 6 32位 1 << 5
    private static $max = 1 << 6;
    //储存数据的变量
    private static $data = [];

    public static function addValue(int $n) {
        //row = n / 32 求十进制数在数组a中的下标
        $row = $n >> 5;
        //相当于 n % 32 求十进制数在数组a[i]中的下标 0x1F=31
        self::$data[$row] = 1 << ($n & 0x1F);

        $row = 0;
        while (true) {
            
        }
    }

    // 判断所在的bit为是否为1
    public static function booleanExits(int $n) {
        $row = $n >> 5;
        return (self::$data[$row] & ( 1 << ($n & 0x1F))) != 1;
    }

    public static function display(int $row) {
        
    }

    public static function getData() {
        return self::$data;
    }

}
