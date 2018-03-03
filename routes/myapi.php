<?php

Route::options('cors/test',function(){
    return response('ok')
        ->header('Access-Control-Allow-Methods','POST, GET, OPTIONS, PUT, DELETE')
        ->header('Access-Control-Allow-Headers','Content-Type, X-Auth-Token, Origin');
})->middleware('cors');

$router->get('/api/banner/{id}', 'BannerController@getBanner');

$router->get('/api/goods/getnewgoods', 'GoodsController@getNewGoods');

$router->get('/api/theme/getthemes', 'ThemeController@getThemes');
