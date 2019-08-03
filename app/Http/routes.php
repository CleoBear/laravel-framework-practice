<?php

$app['router']->get('/',function(){
    return '<h1>Routing Success!!</h1>';
});

$app['router']->get('welcome','App\Http\Controllers\WelcomeController@index');