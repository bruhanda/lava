<?php

use Brukhanda\Lava\Lava;

require __DIR__.'/vendor/autoload.php';

$key = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiIzMzM1MmIxOC02ZDU1LWE2OGEtYmUyNS02NDY3ZjA5ZDE3OTEiLCJ0aWQiOiJiYTk5N2VjYy0xNjQ1LTY4ODktZDA0YS1jYTRjOTdhZWM2YzcifQ.M-Hz27ZGyVYpSCoEgIjtrB_8y2Xgq1kh9ayd4hZ1HEA';
$test = new Lava($key);
var_dump($test->ping());

