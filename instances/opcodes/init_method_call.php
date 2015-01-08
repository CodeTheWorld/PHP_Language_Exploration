<?php
/**
 * INIT_METHOD_CALL
 * 112
 *
 * Created by deshengkong.
 * Date: 15/1/8
 * Time: 下午5:58
 */

class A {
    private $a;
    public function getA(){
        return $this->a;
    }
}

$a = new A();

$b = $a->getA();

var_dump($b);
