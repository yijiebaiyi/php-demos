<?php


$fiber = new Fiber(function (): void {
    echo "fiber before suspend##" . PHP_EOL;
    $value = Fiber::suspend('【fiber suspend parsam】');
    echo "fiber resume, suspend return value: " . $value . PHP_EOL;

    echo "end" . PHP_EOL;
});

$value = $fiber->start();

echo "fiber start value: " . $value . PHP_EOL;

$fiber->resume('【fiber resume param】');
echo 1;
