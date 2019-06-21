<?php


namespace app\controllers\admin;


use mysql_xdevapi\Exception;
use shop\libs\Pagination;

class OrderController extends AppController
{
    public function indexAction(){
        $this->setMeta('Orders');

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 3;
        $count = \R::count('orderproduct');
        $pagination = new Pagination($page, $perpage, $count);
       $start = $pagination->getStart();
        $orders = \R::getAll("SELECT * FROM product JOIN orderproduct ON product.id=orderproduct.product_id   GROUP BY orderproduct.id ORDER BY orderproduct.status LIMIT $start , $perpage");

        $this->set(compact('orders', 'count', 'pagination'));
    }
     public function viewAction (){
        $order_id = $this->getRequestID();

        $order = \R::getRow("SELECT * FROM product  JOIN orderproduct ON orderproduct.product_id = product.id WHERE orderproduct.id = ?  LIMIT 1", [$order_id]);
       if (!$order){
        throw new \Exception("Page not found", 404);
       }
       $order_identity = $order['order_identity'];

       $order_products = \R::getAll("SELECT * FROM product JOIN orderproduct ON product.id=orderproduct.product_id WHERE order_identity = $order_identity GROUP BY orderproduct.id ORDER BY orderproduct.status  " );
        $this->setMeta('Order №'.$order_id);
       $this->set(compact('order', 'order_products'));


     }

     public function changeAction(){
        $order_id = $this->getRequestID();

        $status = !empty($_GET['status']) ? 1 : 0;
         $order = \R::load('orderproduct' , $order_id);

         if (!$order){
             throw new \Exception("Page not found", 404);
         }

         $order->status = $status;
         $order->update_at = date("Y-m-d H:i:s");
         \R::store($order);
         redirect();



     }

     public function  deleteAction (){
        $order_id = $this->getRequestID();
        $order = \R::load('orderproduct', $order_id);
        \R::trash($order);
        redirect(ADMIN.'/order');

     }

}