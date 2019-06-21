<?php


namespace app\models;


use shop\App;

class Category extends AppModel
{
    public $attributes = [
        'name' => '',
        'parent_id'=> '',
        'keywords'=> '',
        'description'=> '',
        'alias' => '',

    ];
    public $rules = [
        'required' =>[
            ['name'],
        ]
    ];

    public function getIds($id){

        $cats = App::$app->getProperty('cats');

        $ids = null;

        foreach ($cats as $k => $v){
            if ($v['parent_id']== $id){
                $ids .= $k .',';
                $ids .= $this->getIds($k);
            }
        }


        return $ids;

    }

}