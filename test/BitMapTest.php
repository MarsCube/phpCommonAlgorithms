<?php

include_once './../src/Algorithm/BitMap.php';
include_once './../src/Algorithm/BitOperation.php';

include_once './Function.php';

use ZX\Algorithm\BitMap;

$arr = [0, 1, 3, 16, 42, 69, 18, 11, 99, 32421, 32423, 32525, 9999999999];

foreach ($arr as $v) {
    BitMap::addValue($v);
}

$tt = BitMap::getData();


$rr = BitMap::exits(9999999998);

if ($rr) {
    p('ok');
} else {
    p('no');
}





