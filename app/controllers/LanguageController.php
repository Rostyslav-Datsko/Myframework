<?php

namespace app\controllers;

use app\models\Cart;
use wfm\App;

class LanguageController extends AppController
{
    public function changeAction()
    {

        $lang = get('lang', 's');
        if ($lang){
            if (array_key_exists($lang, App::$app->getProperty('languages'))) {

                //remove base part of link and separate language from end part of link
                $url = trim(str_replace(PATH, '', $_SERVER['HTTP_REFERER']) , '/');
                $url_parts = explode('/', $url, 2);

                //checking of exist language part in languages array
                if (array_key_exists($url_parts[0], App::$app->getProperty('languages'))){
                    if ($lang != App::$app->getProperty('language')['code']){
                        $url_parts[0] = $lang;
                    } else {
                        //if it is base lang remove - remove it from url
                        array_shift($url_parts);
                    }

                } else {
                    //assign a language value if it aren`t base language
                    if ($lang != App::$app->getProperty('language')['code']){
                        array_unshift($url_parts, $lang );
                    }
                }

                Cart::translate_cart(App::$app->getProperty('languages')[$lang]);

                $url = PATH . '/' . implode('/', $url_parts);
//                debug($url,1);
                redirect($url);
            }
        }
        redirect();
    }
}

