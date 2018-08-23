<?php
// 自动加载
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . $class . '.php';
    require_once($file);
});
