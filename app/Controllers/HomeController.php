<?php
namespace App\Controllers;

use BlitzPHP\Controllers\ApplicationController;

class HomeController extends ApplicationController
{   
    public function index() 
    {
        return $this->view('index')->render();
    }
}