<?php

namespace app\controllers;

use app\models\Main;
use wfm\Controller;

/** @property Main $model */
class MainController extends Controller
{
    public function indexAction()
    {
        $names = $this->model->get_names();
        $this->setMeta('Головна сторінка','Опис...','keywords...');
        $this->set(compact('names'));
    }

}