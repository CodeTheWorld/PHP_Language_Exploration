<?php
/**
 * RAISE_ABSTRACT_ERROR
 * 142
 *
 * Created by deshengkong.
 * Date: 15/1/8
 * Time: 下午8:41
 */

abstract class fail {
    abstract function show();
    abstract function hello();
}

class pass extends fail {
    function show() {
        echo "call to function show()" . PHP_EOL;
    }
    function hello(){}
}

$t2 = new pass();

$t2->show();
