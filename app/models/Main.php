<?php

namespace app\models;


use RedBeanPHP\R;

class Main extends AppModel
{

    //вибрати все з таблиці product і product_description зєднай 2 таблиці де product.id = product_description.product_id
    //з статусом 1 і хіт 1 і передана мова
    public function get_hits($lang, $limit): array
    {
        return R::getAll("SELECT p.* , pd.* FROM product p JOIN product_description pd on p.id = pd.product_id 
                  WHERE p.status = 1 AND p.hit = 1 AND pd.language_id = ? LIMIT $limit", [$lang]);
    }

}