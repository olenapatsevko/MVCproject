<?php


namespace app\controllers\admin;
use app\models\User;
use app\models\AppModel;
use shop\base\Controller;

class AppController extends Controller
{

    public $layout = 'admin';
    public function __construct($route){


        parent::__construct($route);

        if ($route['action'] != 'login-admin' and !isset($_SESSION['successs'])) {
            redirect(ADMIN . '/user/login-admin');
        }
        new AppModel();
    }

    public function getRequestID($get = true, $id = 'id'){
        if ($get){

            $data =  $_GET;

        }else{
            $data =  $_POST;
        }
        $id = !empty($data[$id]) ? (int)$data[$id] : null;
        if (!$id){
            throw  new \Exception('Page not found', 404);
        }
        return $id;
    }


}