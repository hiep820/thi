<?php 
require_once 'model/Usermodel.php';
    class UserController {
        static function viewuser(){
            $user = new UserModel();
            $result =  $user->getAll();
            require_once 'view/user/all.php';
        }
    }
?>