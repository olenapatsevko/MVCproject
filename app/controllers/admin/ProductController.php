<?php


namespace app\controllers\admin;


use app\models\admin\Product;
use app\models\AppModel;
use app\models\Order;
use shop\App;
use shop\libs\Pagination;

class ProductController extends AppController
{
    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('product');
        $pagination = new Pagination($page,$perpage, $count);
        $start = $pagination->getStart();
        $products = \R::getAll("SELECT * FROM category JOIN product ON category.id = product.category_id ORDER BY title LIMIT $start, $perpage ");

        $this->setMeta("Список товаров");
        $this->set(compact('products', 'pagination', 'count'));

    }

    public function addAction(){

        if (!empty($_POST)){
            $product = new Product();
            $data = $_POST;
            $product->load($data);
            $product->attributes['statuss'] = $product->attributes['statuss'] ? 1 : 0;
        if (!$product->validate($data)){
            $product->getErrors();
            $_SESSION['form_data'] = $data;
            redirect();
            }
        if ($id = $product->save('product')){
            $alias = AppModel::createAlias('product' , 'alias' , $data['title'], $id);
            $p = \R::load('product' , $id);
            $p->alias = $alias;
            \R::store($p);
        }
            redirect();
        }


        $this->setMeta('New Product');
    }

    public function editAction(){
        if (!empty($_POST)){
            if (isset($_POST['statuss'])){
               $_POST['statuss'] =  $_POST['statuss']=='on' ? 1: 0;
            }else{
                $_POST['statuss'] = 0;
            }
            $id = $this->getRequestID(false);
            $product = new Product();
            $data = $_POST;
            $product->load($data);
            if (!$product->validate($data)){
                $product->getErrors();
                redirect();
            }
            if ($product->update('product', $id)){
                $alias = AppModel::createAlias('product' , 'alias' , $data['title'], $id);
                $product = \R::load('product' , $id);
                $product->alias = $alias;
                \R::store($product);
            }
            redirect();

        }
        $id = $this->getRequestID();
        $product = \R::load('product' , $id);
        App::$app->setProperty('parent_id' , $product->category_id);
        $this->setMeta("Редактирование товара $product->title");
        $this->set(compact('product'));





    }

    public function deleteAction(){
        $product_id = $this->getRequestID();
        $product = \R::load('product', $product_id);
        \R::trash($product);
        redirect(ADMIN.'/product');





    }


}