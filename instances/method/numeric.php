<?php
/**
 * Created by deshengkong.
 * Date: 15/1/6
 * Time: 下午5:30
 */

echo 'PHP version:'. phpversion() . PHP_EOL;

$a = PHP_INT_MAX;
$b = PHP_INT_MAX + 1;

var_dump($a);
var_dump($b);

var_dump($a === $b-1);