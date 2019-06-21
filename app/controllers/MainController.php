<?php


namespace app\controllers;



use shop\App;
use shop\Cache;

class MainController extends AppController
{


    public function indexAction(){
        $this->setMeta(App::$app->getProperty('shop_name'), 'description', 'keyWords');
        $sale = \R::findAll('product');
        $this->set(compact('sale'));










    }

}