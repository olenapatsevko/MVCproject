<?php


namespace app\controllers;


use app\models\Cart;
use app\models\Order;

class CartController extends AppController
{
    public function addAction(){
        $id = !empty($_GET['id']) ? (int)$_GET['id'] : null;
        $qty = !empty($_GET['qty']) ? (int)$_GET['qty'] : null;
        $mod_id =!empty($_GET['mod']) ? (array)$_GET['mod'] : null;
        $mod =[];
        if ($id){
            $product = \R::findOne("product", 'id = ?', [$id]);
            if (!$product){
                return false;
            }
            if ($mod_id){
                foreach ($mod_id as $mods){
                    $mod[] = \R::findOne('modification', 'WHERE id = ? AND product_id = ?', [$mods, $id]);
                }
            }

        }

      $cart = new Cart();
      $cart->addToCart($product, $qty, $mod);
      if ($this->isAjax()){
          $this->loadView('view');
      }
     redirect();

    }

    public function viewAction(){
            $parent_modification = \R::getAssoc("SELECT * FROM modification_parent" );
            $modifications = \R::getAssoc('SELECT * FROM modification');

        //debug($modifications);
        //debug($_SESSION);

            $this->set(compact('parent_modification', 'modifications'));
    }

    public function deleteAction(){
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        if (isset($_SESSION['cart'][$id])){
            $cart = new Cart();
            $cart->deleteItem($id);
        }
        if ($this->isAjax()){
            $this->loadView('view');
        }
        redirect();
    }

    public function incrementAction(){
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        if (isset($_SESSION['cart'][$id])){
            $cart = new Cart();
            $cart->incrementItem($id);
        }
        if ($this->isAjax()){
            $this->loadView('view');
        }
        redirect();
    }

    public function decrementAction()
    {
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        if (isset($_SESSION['cart'][$id])){
            $cart = new Cart();
            $cart->decrementItem($id);
        }
        if ($this->isAjax()){
            $this->loadView('view');
        }
        redirect();


    }

    public function checkoutAction(){

        if (!empty($_POST) and !empty($_SESSION['cart'])){

          $orders =  Order::saveOrder();
           Order::mailOrder();

        }


    }

}