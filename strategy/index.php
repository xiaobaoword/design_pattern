<?php

namespace strategy;

include '../autoload.php';
// 满减折算
$mode1 = new StrategyFind(new ManJianStrategy());
$mode1->get(100);

echo '<br>';

// 满减活动
$mode2= new StrategyFind(new DaZheStrategy());
$mode2->get(100);