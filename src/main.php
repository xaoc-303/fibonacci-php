<?php
set_time_limit(0);
ini_set('memory_limit', '512M');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/fibo.php';

function measure($fn, $param_array) {
    $start = microtime(true);
    $result = call_user_func_array($fn, $param_array);
    echo sprintf("%.8f", microtime(true) - $start) . PHP_EOL;

    return $result;
}

function start($f, $n) {
    switch ($f) {
        case "f1":
        case "f2":
        case "f3": {
            return measure($f, [$n]);
        }
        default: return 0;
    }
}

echo start(strval($argv[1]), intval($argv[2])) . PHP_EOL;
