<?php

namespace observer_factory;

include '../autoload.php';

$tongzhizhe = new Secretary();

$tongshi1 = new PlayObserver('用户A', $tongzhizhe);
$tongshi2 = new PlayObserver('用户B', $tongzhizhe);

$tongzhizhe->secretaryNews('老板回来了');

$tongzhizhe->attach($tongshi1);
$tongzhizhe->attach($tongshi2);

$tongzhizhe->notify();