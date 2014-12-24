<?php
/**
 * Created by deshengkong.
 * Date: 14/12/23
 * Time: 下午7:56
 */

$arr1 = array(
    0 => 'dog',
    2 => 'cat'
);
$arr2 = array(
    1 => 'giraffe',
    2 => 'panda',
    4 => 'deer',
);

$arr3 = array_merge($arr1, $arr2);
print_r($arr3);