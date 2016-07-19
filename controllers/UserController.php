<?php

class UserController{

    public function actionRegister(){

        $name = '';
        $email = '';
        $password = '';

        if(isset($_POST['registration'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkName($name)){
               $errors[] = "name is not valid";
            }

            if(!User::checkEmail($email)){
                $errors[] = "email is not valid";
            }

            if(!User::checkPass($password)){
                $errors[] = "password is not valid";
            }

            if(User::checkEmailExists($email)){
                $errors[] = "email is set in db";
            }

            if($errors == false){
                $result = User::register($name, $email, $password);
            }
        }

        require_once (ROOT.'/views/user/register.php');

        return true;

    }

    public  function actionLogin(){
        $email = '';
        $password = '';

        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkEmail($email)){
                $errors[] = "email is not correct";
            }

            if(!User::checkPass($password)){
                $errors[] = "password is not correct";
            }

            $userId = User::checkUserData($email, $password);

            if($userId == false){
                $errors[] = 'data is not correct';
            }else{
                User::auth($userId);

                header("Location: /");
            }
        }

        require_once ROOT.'/views/user/login.php';
        return true;
    }

    public function actionLogout(){
        session_start();
        unset($_SESSION['user']);
        header("Location: /");
    }

}