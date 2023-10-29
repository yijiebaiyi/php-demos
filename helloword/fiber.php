<?php

function task1()
{
    echo "Task 1 started.\n";
    Fiber::suspend();
    echo "Task 1 resumed.\n";
    Fiber::suspend();
    echo "Task 1 finished.\n";
}

function task2()
{
    echo "Task 2 started.\n";
    Fiber::suspend();
    echo "Task 2 resumed.\n";
    Fiber::suspend();
    echo "Task 2 finished.\n";
}

$fiber1 = new Fiber('task1');
$fiber2 = new Fiber('task2');

$fiber1->start();
$fiber2->start();

$fiber1->resume();
$fiber2->resume();

$fiber1->resume();
$fiber2->resume();
