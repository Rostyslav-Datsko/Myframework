<?php

require_once dirname(__DIR__) . '/config/init.php';

new \wfm\App();
\wfm\App::$app->setProperty('test', 'test');
var_dump(\wfm\App::$app->getProperties());

echo \wfm\App::$app->getProperty('pagination');

