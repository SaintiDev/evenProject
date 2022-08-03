<?php

namespace App\Controllers;

use App\Models\EventModel;
use Library\Controllers\AbstractController;

class EventController extends AbstractController
{
    public function event(): void
    {
        $event = $_GET['id'];
        
        $model = new EventModel();
        $posts = $model->getOne($event);
        
        $this->render('event.phtml', [
            'posts' => $posts
        ]);
    }
}