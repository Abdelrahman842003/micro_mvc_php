<?php

namespace MVC\controllers;

use MVC\core\controller;
use GUMP;


class logincontroller extends controller
{
    function index()
    {
        $path = "login/login";
        $data = [];
        $this->view($path, $data);
    }

    function postlogin()
    {
        $is_valid = GUMP::is_valid($_POST, [

            'password' => 'required|max_len,100|min_len,6',
            'email' => 'required|valid_email',

        ]);

        echo "<pre>";
        print_r($is_valid);

    }
}