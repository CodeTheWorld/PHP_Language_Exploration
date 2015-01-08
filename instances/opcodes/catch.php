<?php
/**
 * CATCH
 * 107
 *
 * Created by deshengkong.
 * Date: 15/1/8
 * Time: 下午5:47
 */

try{
    throw new Exception('error');
} catch (Exception $e) {
    var_dump($e);
}