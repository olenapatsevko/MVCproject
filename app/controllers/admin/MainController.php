<?php


namespace app\controllers\admin;


class MainController extends AppController
{

    public function indexAction(){
        $countNewOrders  = \R::count('orderproduct' , "status = 0");
        $countProducts = \R::count('product' , "statuss = 1");
        $countCategory = \R::count('category');
        //debug($countCategory);
        $this->setMeta('Админ панель');
        $this->set(compact('countProducts','countNewOrders', 'countCategory'));

    }

}