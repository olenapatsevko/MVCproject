<?php


namespace app\controllers\admin;


use app\models\AppModel;
use app\models\Category;
use shop\App;

class CategoryController extends AppController
{




    public function indexAction(){
        $this->setMeta('Список категорий');

    }

    public function deleteAction(){

        $id = $this->getRequestID();
        $category= \R::load('category', $id);
        \R::trash($category);
        redirect();

    }
    public function addAction(){
        if (!empty($_POST)){
        $category = new Category();
        $data = $_POST;

        $category->load($data);
            if (!$category->validate($data)){
             $category->getErrors();
             redirect();
            }
             if ($id = $category->save('category')){
            $alias  = AppModel::createAlias('category' , 'alias' , $data['name'],$id);
            $cat = \R::load('category' , $id);
            $cat->alias = $alias;
            \R::store($cat);

            }
             redirect();
        }
        $this->setMeta('Новая категория');

    }

    public function editAction(){
        if (!empty($_POST)){
            $id = $this->getRequestID(false);
            $category = new Category();
            $data = $_POST;
            $category->load($data);
            if (!$category->validate($data)){
                $category->getErrors();
                redirect();
            }
            if ($category->update('category' , $id )){
              $alias = AppModel::createAlias('category', 'alias', $data['name'], $id);
                $category = \R::load('category' , $id);
                $category->alias = $alias;
                \R::store($category);

            }
            redirect();
        }
        $id = $this->getRequestID();
        $category  = \R::load('category' , $id);

        App::$app->setProperty('parent_id' , $category->parent_id);
        $this->setMeta("Редактирование категории $category->name");
        $this->set(compact('category'));


    }
}