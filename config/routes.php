<?php

use wfm\Router;

//Маршрут з префіксом admin
Router::add('^admin/?$', ['controller' => 'Main', 'action' => 'index', 'admin_prefix' => 'admin']);
//Маршрут з префіксом admin який записує в масив контроллер все що до '/' а в дію - все що після
Router::add('^admin/(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['admin_prefix' => 'admin']);

//Маршрут з префіксом product який записує в масив slug все що до '/' а в дію - все що після
//Router::add('^product/(?P<slug>[a-z0-9_-]+)/?$', ['controller' => 'Product', 'action' => 'view']);

//Маршрут з префіксом product який записує в масив slug все що до '/' а в дію - все що після
Router::add('^(?P<lang>[a-z]+)?/?product/(?P<slug>[a-z0-9_-]+)/?$', ['controller' => 'Product', 'action' => 'view']);

//будь-який маршрут у якому по замочуванню контроллер - Main а дія - index
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);

//Записує в масив контроллер все що до '/' а в дію - все що після
Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');

