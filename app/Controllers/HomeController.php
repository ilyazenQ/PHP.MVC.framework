<?php
namespace App\Controllers;
use App\View;
use PDO;

class HomeController {

public function index():string {
    $db = new PDO(
        'mysql:host=localhost;dbname=northwind',
        $_ENV['DB_USER'],
        '',

    );
    $query = 'SELECT * FROM orders LIMIT 2';
    $stmt = $db->query($query);


    var_dump($stmt->fetchAll());

    return View::make('index',
       ['foo' => 'bar']

   )->render(true);

}

public function show():string {

    return View::make('show')->render(true);

}

}