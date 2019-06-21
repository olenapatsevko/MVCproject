<?php


namespace app\models;


use shop\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class Order extends AppModel
{    static public $ids= [];

    public static function saveOrder(){
        $time = time();
        $_POST['time'] = $time;
        foreach ($_SESSION['cart'] as $product =>$attributes ){
            $order = \R::dispense('orderproduct');
            $id= explode(',' , $product);
            $order->product_id = $id[0];
            unset($id[0]);
            $order->order_identity = $time;
            $order->modifications = implode(' ',$id);
            $order->price = h($attributes['price']);
            $order->qty = h($attributes['qty']);
            $order->title = h($attributes['title']);
            $order->status = 0;
            $order->date = h(date("Y-m-d H:i:s"));
            $order->name = h($_POST['name']);
            $order->email = h($_POST['email']);
            $order->payment_method = h($_POST['payment']);
            $order->phone = (int)$_POST['phone'];
            $order->delivery = h($_POST['transport']);
            $order->time = date('l jS \of F Y h:i:s A');
            $order->note = isset($_POST['comment'])  ? h(trim($_POST['comment'])): '' ;
            self::$ids[]=  \R::store($order);

        }
        return self::$ids;


    }





     public static function mailOrder(){
         $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
             ->setUsername(App::$app->getProperty('smtp_login'))
             ->setPassword(App::$app->getProperty('smtp_password'))
         ;
         // Create the Mailer using your created Transport
         $mailer = new Swift_Mailer($transport);

         // Create a message
         ob_start();
         require APP . '/views/mail/mail_order.php';
         $body = ob_get_clean();

         $message = (new Swift_Message("Сделан заказ №".$_POST['time']." на сайте " . App::$app->getProperty('shop_name')))
             ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('shop_name')])
             ->setTo(App::$app->getProperty('admin_email'))
             ->setBody($body, 'text/html')
         ;
         $message_client = (new Swift_Message("Вы совершили заказ №".$_POST['time']." на сайте " . App::$app->getProperty('shop_name')))
             ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('shop_name')])
             ->setTo($_POST['email'])
             ->setBody($body, 'text/html')
         ;

         $result = $mailer->send($message);
         $result1 = $mailer->send($message_client);
         unset($_SESSION['cart']);
         unset($_SESSION['cart.qty']);
         unset($_SESSION['cart.sum']);
         $_POST = array();


     }



}