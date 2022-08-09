<?php

namespace app\controllers;

use app\models\Cart;
use wfm\App;

/** @property Cart $model */
class CartController extends AppController
{
    public function addAction(): bool
    {
        $lang = App::$app->getProperty('language');

        $id =get('id');
        $qty =get('qty');

        if (!$id){
            return false;
        }

        $product = $this->model->get_product($id, $lang);
        if (!$product){
            return false;
        }

        $this->model->add_to_cart($product, $qty);
        if ($this->isAjax()){
            $this->loadView('cart_modal');
        }
        redirect();
        return true;
    }


    public function showAction()
    {
        $this->loadView('cart_modal');
    }

    public function deleteAction()
    {
        $id = get('id');
        if (isset($_SESSION['cart'][$id])){
            $this->model->delete_item($id);
        }
        if ($this->isAjax()){
            $this->loadView('cart_modal');
        }
        redirect();
    }

    public function clearAction()
    {
        $this->model->clear_cart();
        $this->loadView('cart_modal');
        return true;
    }

}