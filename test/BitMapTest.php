<?php

include_once './../src/Algorithm/BitMap.php';

include_once './Function.php';

use ZX\Algorithm\BitMap;

$arr = [16, 24, 37, 42, 59, 68, 71, 86, 94, 97, 42, 69, 18, 11,99,32423,32525];

//foreach ($arr as $v) {
//    BitMap::addValue($v);
//}

$tt = BitMap::getData();
foreach ($tt as $v) {
//    p($v);
//    p(base_convert($v, 10, 2));
//    p(decbin($v));
}
//p(base_convert(31, 10, 2));
//pp($tt);
//phpinfo();
p(PHP_INT_MAX);
p(1 << 6);

p(base_convert(PHP_INT_MAX, 10, 2));

