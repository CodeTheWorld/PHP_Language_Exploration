<?php
/**
 * array_merge
 * http://blog.csdn.net/dia_vampire/article/details/42091145
 * Created by deshengkong.
 * Date: 14/12/25
 * Time: 下午8:37
 */

echo 'PHP version:'. phpversion() . PHP_EOL;

$arr1 = array(
    'astr1' => 'astr1',
    3 => 'anum1',
    'anone1'
);

$arr2 = array(
    1 => 'bnum1',
    2 => 'bnum2',
    'bstr1' => 'bstr1',
    3 => 'bnum3',
    'astr1' => 'bstr2',
    '0' => 'bstr3',
);

$arr3 = array_merge($arr1, $arr2);
print 'arr3:' . print_r($arr3, true) . PHP_EOL;

$arr4 = array_merge($arr2, $arr1);
print 'arr4:' . print_r($arr4, true) . PHP_EOL;
