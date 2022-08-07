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

        //record all languages into app
        App::$app->setProperty('languages', Language::getLanguages());
        ///record chosen language into app
        App::$app->setProperty('language', Language::getLanguage(App::$app->getProperty('languages')));
        $lang = App::$app->getProperty('language');
        \wfm\Language::load($lang['code'], $this->route);
    }
}