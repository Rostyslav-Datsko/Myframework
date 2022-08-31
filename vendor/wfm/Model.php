<?php

namespace wfm;

use RedBeanPHP\R;
use Valitron\Validator;

abstract class Model
{
    public array $attributes  = [];
    public array $errors = [];
    public array $rules = [];
    public array $labels = [];

    public function __construct()
    {
        Db::getInstance();
    }

    public function load($data)
    {
        foreach ($this->attributes as $name => $value){
            if (isset($data[$name])){
                $this->attributes[$name] = $data[$name];

            }
        }
    }

    public function validate($data): bool
    {
        Validator::langDir(APP . '/languages/validator/lang');
        Validator::lang(App::$app->getProperty('language')['code']);
        $validator = new Validator($data);
        $validator->rules($this->rules);
        $validator->labels($this->getLables());

        if ($validator->validate()){
            return true;
        } else {
            $this->errors = $validator->errors();
            return false;
        }

    }

    public function getErrors()
    {
        $errors = '<ul>';
        foreach ($this->errors as $error){
            foreach ($error as $item){
                $errors .= "<li>{$item}</li>";
            }
        }

        $errors .="</ul>";
        $_SESSION['errors'] = $errors;
    }

    public function getLables(): array
    {
        $labels = [];
        foreach ($this->labels as $k => $v){
            $labels[$k] = ___($v);
        }


        return $labels;
    }

    public function save($table): int|string
    {
        $tbl = R::dispense($table);
        foreach ($this->attributes as $name => $value){
            if ($value != ''){
                $tbl->$name = $value;
            }
        }
        return R::store($tbl);
    }
}