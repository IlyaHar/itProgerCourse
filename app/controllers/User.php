<?php

class User extends Controller
{

    public function index()
    {
        $login = $_POST['login'];
        $email = $_POST['email'];

        $this->view(
            'user/reg',
            ['title' => 'Регистрация', 'login' => $login, 'email' => $email]
        );
    }
}