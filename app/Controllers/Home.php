<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $homePage= view('Home/header').view('Home/body');
        return $homePage;
    }
}
