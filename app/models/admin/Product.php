<?php
namespace app\models\admin;

use app\models\AppModel;

class Product  extends AppModel
{

    public $attributes = [
        'title' => '',
        'category_id' => '',
        'statuss' => '',
        'price' => '',
        'keywords' => '',
        'description' => '',
        'alias' => '',
        'image' => '',


    ];
    public $rules = [
      'required' =>[
          ['title'],
          ['category_id'],
          ['price'],
      ],
        'integer' => [
            ['category_id'],
        ]
    ];
}