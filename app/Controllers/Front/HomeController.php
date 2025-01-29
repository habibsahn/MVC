<?php

namespace App\Controllers\Front;
use App\Core\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $title = 'MVC Eğitimine Hoşgeldiniz.';
        $content = 'MVC Eğitim Detayı.';
        $this->render('front/home', ['title' => $title, 'content' => $content]);
    }
}