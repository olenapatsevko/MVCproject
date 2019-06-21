<?php


namespace app\controllers;


class SearchController extends AppController
{

    public function typeaheadAction(){
        if ($this->isAjax()){
            $query = !empty(trim($_GET['query'])) ? trim($_GET['query']) : null;
        if ($query){
            $products = \R::getAll('SELECT id, title from product WHERE title LIKE ? LIMIT 9', ["%{$query}%"]);
        echo json_encode($products);
        }

        }
        die;
    }

    public function indexAction(){
        $query = !empty(trim($_GET['s']))? trim($_GET['s']) : null;
        if ($query){
            $products = \R::find('product', "title LIKE ? ", ["%{$query}%"]);

        }
        $this->setMeta('Поиск по:'.h($query));
        $this->set(compact('products' ,'query'));
    }

    public function searchAction(){
        $query = !empty(trim($_GET['s']))? trim($_GET['s']) : null;
        if ($query){
            $products = \R::find('product', "title LIKE ? ", ["%{$query}%"]);

        }
        $this->setMeta('Поиск по:'.h($query));
        $this->set(compact('products' ,'query'));
    }

}