<?php

/**
 * recursive if-else
 *
 * @param $n
 * @return int
 */
function f1($n)
{
    return $n == 0 ? 0 : ($n == 1 ? 1 : f1($n-1) + f1($n-2));
}

/**
 * optimization
 *
 * @param $n
 * @return int
 */
function f2($n)
{
    $a = 0;
    $b = 1;

    foreach (range(2, $n) as $item) {
        list($a, $b) = [$b, $a + $b];
    }

    return $b;
}

/**
 * f:type
 *
 * @param int $n
 * @return int
 */
function f3(int $n):int
{
    return $n == 0 ? 0 : ($n == 1 ? 1 : f3($n-1) + f3($n-2));
}
