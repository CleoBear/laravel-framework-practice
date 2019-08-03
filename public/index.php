<?php

//調用自動加載文件，添加自動加載文件函數
require __DIR__.'/../vendor/autoload.php';
//實例化服務容器，註冊事件及路由服務提供者
$app = new Illuminate\Container\Container;
with(new Illuminate\Events\EventServiceProvider($app))->register();
with(new Illuminate\Routing\RoutingServiceProvider($app))->register();

//加載路由
require __DIR__.'/../app/Http/routes.php';

//實例化請求並處理請求
$request = Illuminate\Http\Request::createFromGlobals();

$response = $app['router']->dispatch($request);

//返回請求響應
$response->send();

// http://localhost:8888/lara/public/
