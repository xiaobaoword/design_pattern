<?php
// 支付入口文件index.php

// 自动加载
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . $class . '.php';
    require_once($file);
});


// 张三选择支付宝支付
$param = [];
$param['name'] = '张三';
$param['money'] = 100;

$pay = new Pay;
$pay->payAction('YinLian', $param); // 调用银联支付方式
$pay->payAction('ZhiFuBao', $param); // 调用支付宝支付方式
$pay->payAction('WeiXin', $param); // 调用微信支付方式