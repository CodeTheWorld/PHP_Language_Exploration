<?php
/**
 * JMPZ_EX
 * 46
 *
 * Created by deshengkong.
 * Date: 15/1/7
 * Time: 下午7:01
 */

$a = false;
$b = 0;

if ($a && $b) {
    echo 'good';
}

if (!$a) goto end;
if (!$b) goto end;
echo 'good';
end:return 0;