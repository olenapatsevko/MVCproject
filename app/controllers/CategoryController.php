<?php


namespace app\controllers;


use app\models\Breadcrumbs;
use app\models\Category;
use app\widgets\filter\Filter;
use function PHPSTORM_META\type;
use shop\App;
use shop\libs\Pagination;

class CategoryController extends AppController
{

    public function viewAction(){

        $alias = ($this->route['alias']);
        $category = \R::findOne('category', 'alias = ? ', ["{$alias}"]);

        if (!$category){
            throw new \Exception("Page not found", 404);
        }


        $breadcrumbs = Breadcrumbs::getBreadcrumbs($category->id);
        $breadcrumbs = str_replace("<li><a ></a></li>", "", $breadcrumbs);


        $cat_model = new Category();
        $ids = $cat_model->getIds($category->id);
        $ids = !$ids ? $category->id : $ids.$category->id;

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $perpage = App::$app->getProperty('pagination');

        $sql_part ="";
        $filter = "";

        if (isset($_GET['filter'])){
            if (!empty($_GET['filter'])) {
                $filter = $_GET['filter'];
                //echo ($filter);

                if ($filter[0] == '1') {

                    $filter = array_slice($filter, 1);


                }
                // var_dump($filter);

                if (is_array($filter)) {
                    $filter = join(',', $filter);
                }
                $filter = Filter::getFilter($filter);
                if (is_string($filter)){
                $sql_part = "AND id IN (SELECT product_id FROM attribute_product WHERE attr_id IN ($filter))";
                }
            }


          //  $filter = Filter::getFilter(implode(",",$filter));
        }





        $total = \R::count('product', "category_id IN ($ids) $sql_part");
        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();


       $products = \R::find('product', "category_id IN ($ids) $sql_part LIMIT $start , $perpage");
        if ($this->isAjax()){

           // $filter = Filter::getFilter(join(',', $filter));
            $this->loadView('filter', compact('products', 'total','pagination' ));
            //SELECT * from product WHERE category_id IN () AND id IN ();
            //SELECT product_id FROM attribute_product WHERE attr_id IN ()
            //debug(join('',$filter));

        }

        $this->setMeta($category->title , $category->description , $category->keywords);
       $this->set(compact('products', 'breadcrumbs', 'pagination','total'));





    }

}