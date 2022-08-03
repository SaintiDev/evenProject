<?php

namespace App\Controllers;

use App\Models\EventModel;
use Library\Controllers\AbstractController;

class HomeController extends AbstractController
{
    public function index(): void
    {        
        $model = new EventModel();
        $posts = $model->getAll();
        
        $this->render('index.phtml', [
            'posts' => $posts
        ]);
    }
}