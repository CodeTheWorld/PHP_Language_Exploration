<?php
/**
 * ISSET_ISEMPTY_PROP_OBJ
 * 148
 *
 * Created by deshengkong.
 * Date: 15/1/8
 * Time: 下午8:59
 */

$obj = new stdClass();

if (empty($obj->num)) return 0;