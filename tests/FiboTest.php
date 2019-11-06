<?php

use PHPUnit\Framework\TestCase;

/**
 * Class FiboTest
 *
 * @example php vendor/bin/phpunit tests/FiboTest.php
 */
class FiboTest extends TestCase
{
    public function fibo_data()
    {
        return [
            [4, 3],
            [5, 5],
            [6, 8],
        ];
    }

    /**
     * @dataProvider fibo_data
     */
    public function test_f1($n, $r)
    {
        $this->assertSame(f1($n), $r);
    }

    /**
     * @dataProvider fibo_data
     */
    public function test_f2($n, $r)
    {
        $this->assertSame(f2($n), $r);
    }
}
