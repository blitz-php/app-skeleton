<?php
namespace App\Controllers;

use BlitzPHP\Controllers\BaseController;

class HomeController extends BaseController
{

    public function index() 
    {
        echo view('home/index', ['name' => 'Dimitri'])->get(true);
    }
}