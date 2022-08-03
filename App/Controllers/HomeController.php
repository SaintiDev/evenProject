<?php

namespace App\Controllers;

use App\Models\EventModel;
use Library\Controllers\AbstractController;

class HomeController extends AbstractController
{
    public function index(): void
    {
        $name = '';
        
        $model = new EventModel();
        $posts = $model->getAll();
        
        $this->render('index.phtml', [
            'name' => $name,
            'age' => 20,
            'posts' => $posts
        ]);
    }
}