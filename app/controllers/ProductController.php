<?php


namespace app\controllers;


use app\models\Breadcrumbs;

class ProductController extends AppController
{


    public function viewAction(){

        $alias = ($this->route['alias']);                        //"SELECT * FROM product JOIN product_description ON product.id=product_description.product_id  WHERE  alias = ? AND status = 1 LIMIT 1"

        $product =   \R::findOne("product","  WHERE  alias = ? AND statuss = 1", [$alias]);


        if(!$product) {
            throw new \Exception('Page not found', 404);}


        $breadcrumbs = Breadcrumbs::getBreadcrumbs($product->category_id, $product->title);
        $gallery = \R::findAll('gallery', 'product_id = ?', [$product->id]);
        $modification_parent = \R::findAll('modification_parent');
        //debug($product);
        $modifications = \R::findAll('modification', "WHERE product_id = ?", [$product->id]);
        //debug($modifications);
        $this->setMeta($product->title,$product->description,$product->image);
        $this->set(compact('product', 'gallery','breadcrumbs', 'modifications' ,'modification_parent'));



    }
    public  function sizeAction(){

    }
}