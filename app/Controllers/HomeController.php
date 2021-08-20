<?php
namespace App\Controllers;
use App\View;

class HomeController {

public function index():string {

   return View::make('index',['foo' => 'bar'])->render();

}

public function show():string {

    return View::make('show')->render();

}

}