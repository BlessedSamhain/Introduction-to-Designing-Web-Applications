<?php

use models\User;

require_once 'AppController.php';
require_once 'src/models/User.php';


class SecurityController extends AppController
{
    public function login() {
        $user=new User('abc@student.pk.edu.pl', 'admin', 'Abc', 'Def');
        //var_dump($_POST);
        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email=$_POST["email"];
        $password=$_POST["password"];

        if ($user->getEmail() != $email) {
            return $this->render('login', ['messages'=>['User with this email do not exist!']]);
        }

        if ($user->getPassword() != $password) {
            return $this->render('login', ['messages'=>['Wrong Password']]);
        }

        return $this->render('projects');
    }
}