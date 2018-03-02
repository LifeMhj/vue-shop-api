<?php

$router->get('/api/banner/{id}', 'BannerController@getBanner');

$router->get('/api/goods/getnewgoods', 'GoodsController@getNewGoods');

$router->get('/api/theme/getthemes', 'ThemeController@getThemes');
