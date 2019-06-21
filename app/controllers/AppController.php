<?php


namespace app\controllers;
use app\models\AppModel;
use shop\App;
use shop\base\Controller;
use shop\Cache;


class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
        App::$app->setProperties('cats', self::cacheCategory());

    }

    public static function cacheCategory(){
        $cache = Cache::instance();
        $cats = $cache->get('cats');
        if (!$cats){
           $cats = \R::getAssoc("SELECT * FROM oc_category JOIN category ON oc_category.category_id = category.category_id ORDER BY  id");


           $cache->set('cats', $cats);
        }
        return $cats;
    }



}