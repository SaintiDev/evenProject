<?php

namespace App\Controllers;

use Library\Controllers\AbstractController;

class UserController extends AbstractController
{
    public function login(): void
    {
        $this->render('login.phtml');
    }
}