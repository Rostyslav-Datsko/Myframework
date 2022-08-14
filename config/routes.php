<?php

use wfm\Router;

//Route with admin prefix
Router::add('^admin/?$', ['controller' => 'Main', 'action' => 'index', 'admin_prefix' => 'admin']);

//Route with the prefix admin, which writes everything before '/' into the controller array, and everything after into the action
Router::add('^admin/(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['admin_prefix' => 'admin']);

//Route with the product prefix that writes everything before '/' into the slug array, and everything after into the action
Router::add('^(?P<lang>[a-z]+)?/?product/(?P<slug>[a-z0-9_-]+)/?$', ['controller' => 'Product', 'action' => 'view']);
//Route categories
Router::add('^(?P<lang>[a-z]+)?/?category/(?P<slug>[a-z0-9_-]+)/?$', ['controller' => 'Category', 'action' => 'view']);
//Route search
Router::add('^(?P<lang>[a-z]+)?/?search/?$', ['controller' => 'Search', 'action' => 'index']);
//Route search
Router::add('^(?P<lang>[a-z]+)?/?wishlist/?$', ['controller' => 'Wishlist', 'action' => 'index']);

//Any route in which the controller is Main and the action is index
Router::add('^(?P<lang>[a-z]+)?/?$', ['controller' => 'Main', 'action' => 'index']);

//Route records everything in controller before '/' into the array, and everything after into the action
Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');
Router::add('^(?P<lang>[a-z]+)/(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');

