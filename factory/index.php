<?php
namespace factory;
include '../autoload.php';

$mode = Cache::cacheMode('Redis');
$mode->getName();