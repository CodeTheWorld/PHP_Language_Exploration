<?php
/**
 * TICKS
 * 105
 *
 * Created by deshengkong.
 * Date: 15/1/8
 * Time: 下午5:06
 */

// A function that records the time when it is called
function profile()
{
    echo "profile function is called\n";
}

// Set up a tick handler
register_tick_function("profile");

// Initialize the function before the declare block
profile();

// Run a block of code, throw a tick every 2nd statement
declare(ticks=2) {
    for ($x = 0; $x < 10; ++$x) {
        echo "hello world\n";
    }
}