<?php
/**
 * Created by deshengkong.
 * Date: 14/12/23
 * Time: 下午8:07
 */

echo 'PHP version:'. phpversion() . PHP_EOL;

$arr2 = array(
    1 => 'giraffe',
    '2' => 'panda',
    9223372036854775806 => 'bird',
    '9223372036854775807' => 'deer',
    '9223372036854775808' => 'pig'
);

echo 'PHP_INT_MAX:' . PHP_INT_MAX . PHP_EOL;
var_dump($arr2);
