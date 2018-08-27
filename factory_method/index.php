<?php
namespace factory_method;

include '../autoload.php';

// 张三支付
$param = [];
$param['name'] = '张三';
$param['money'] = 100;


$factory = new WeiXinFactory();
$mode = $factory->createMode(); // 使用工厂类获取产品类
$mode->doAction($param); // 执行产品类方法