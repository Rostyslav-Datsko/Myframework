<?php

namespace app\models;


use RedBeanPHP\R;

class Main extends AppModel
{

    /* select all from product and product_description join 2 tables where product.id = product_description.product_id
    with status 1 and hit 1 and passed language */
    public function get_hits($lang, $limit): array
    {
        return R::getAll("SELECT p.* , pd.* FROM product p JOIN product_description pd on p.id = pd.product_id 
                  WHERE p.status = 1 AND p.hit = 1 AND pd.language_id = ? LIMIT $limit", [$lang['id']]);
    }

}