<?php
// PHP 8.1 协程示例
function simpleCoroutine()
{
    echo "协程开始\n";
    yield;
    echo "协程恢复\n";
    yield;
    echo "协程结束\n";
}

$coroutine = simpleCoroutine();

$coroutine->current(); // 协程开始。。。

echo "step 1........" . PHP_EOL;

$coroutine->next(); // 协程恢复。。。

echo "step 2........" . PHP_EOL;

$coroutine->next(); // 协程结束
