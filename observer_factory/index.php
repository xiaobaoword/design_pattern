<?php

namespace observer_factory;

include '../autoload.php';

// 通知者A 进行通知
$tongzhizhe = new SubjectA();
$tongshi1 = new NbaObserver('用户A', $tongzhizhe);
$tongshi2 = new StockObserver('用户B', $tongzhizhe);

$tongzhizhe->attach('用户A', $tongshi1);
$tongzhizhe->attach('用户B', $tongshi2);

$tongzhizhe->secretaryNews('老板回来了');
$tongzhizhe->notify();