<?php
/**
 * FETCH_FUNC_ARG
 * 92
 *
 * Created by deshengkong.
 * Date: 15/1/8
 * Time: 下午4:44
 */

$x = 1;
$y = 'x';

foo($$y);

function foo($a) {echo $a;}