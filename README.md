# fibonacci-php

[![Build Status](https://travis-ci.org/xaoc-303/fibonacci-php.svg?branch=master)](https://travis-ci.org/xaoc-303/fibonacci-php)

## recursive if-else

| v | # | 30 | 35 | 40 | 45 |
| --- | --- | --- | --- | --- | --- |
| 7.1.23 | [PHP](./src/fibo.php) | 0.09746909 | 1.11300397 | 11.95916796 | 131.70196891 |
| 7.1.23 | [PHP](./src/fibo.php) (f:type) | 0.11967611 | 1.35702896 | 14.67897701 | 155.63229012 |
| | [Total](https://github.com/xaoc-303/fibonacci) | | | | |

## optimization

| v | # | 30 | 35 | 40 | 45 |
| --- | --- | --- | --- | --- | --- |
| 7.1.23 | [PHP](./src/fibo.php) | 0.00001693 | 0.00001812 | 0.00001907 | 0.00001907 |
| | [Total](https://github.com/xaoc-303/fibonacci) | | | | |

#### setting console command 'time'
```
export TIMEFMT=$'\nreal\t%*E\nuser\t%*U\nsys\t%*S'
```

#### run

```
time php src/main.php f1 30
time php src/main.php f2 30
```

```
php vendor/bin/phpunit tests
```
