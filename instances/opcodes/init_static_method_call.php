<?php
/**
 * INIT_STATIC_METHOD_CALL
 * 113
 *
 * Created by deshengkong.
 * Date: 15/1/8
 * Time: 下午6:03
 */

class B {
    private static $a;
    public static function getA(){
        return self::$a;
    }
}

$b = B::getA();

var_dump($b);
