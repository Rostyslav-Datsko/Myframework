<?php

namespace app\controllers;

use wfm\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->setMeta('Головна сторінка','Опис...','keywords...');
        $this->set(['test' => 'Test var']);
    }

}