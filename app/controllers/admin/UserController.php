<?php


namespace app\controllers\admin;


use app\models\User;

class UserController extends AppController
{

    public function loginAdminAction(){

       $this->layout = 'login';
       if (!empty($_POST)){

           $user = new User();

           if ($user->loginAdmin()){
               $_SESSION['successs'] = 'Success';
               redirect(ADMIN);

           }else{
               $_SESSION['error'] = 'Fail';
               redirect();
           }
       }
    }

    public function logoutAction(){
        unset($_SESSION['successs']);
        redirect();
    }



}