<?php
// src/Controller/EventsController.php

namespace App\Controller;

use Intervention\Image\ImageManager;
use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Event\EventInterface;

class PhotosController extends AppController
{
    public function gallery($name = null)
    {
        $this->set('name', $name);
    }
}

?>