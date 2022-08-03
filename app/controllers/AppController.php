<?php

namespace app\controllers;

use app\models\AppModel;

use app\widgets\language\Language;
use wfm\App;
use wfm\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();

        //запис усіх мов з бд в app
        App::$app->setProperty('languages', Language::getLanguages());
        //запис вибраної мови в app
        App::$app->setProperty('language', Language::getLanguage(App::$app->getProperty('languages')));
    }
}