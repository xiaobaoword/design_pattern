<?php
namespace abstract_factory;

include '../autoload.php';

// 张三选择支付宝支付
$param = [];
$param['name'] = '张三';
$param['money'] = 100;


$mode = new WeiXin();
$mode->doAction($param);