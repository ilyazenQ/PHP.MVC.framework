<?php
namespace App\Controllers;
use App\App;
use App\Models\Order;
use App\View;
use PDO;

class HomeController {

public function index():string {

    $orders = new Order();
    var_dump($orders->orders());
    //$db1 = App::db();
   // var_dump($db===$db1);
  //  $query = 'SELECT * FROM orders LIMIT 2';
    //$stmt = $db->query($query);
    //var_dump($stmt->fetchAll());

    return View::make('index',
       ['foo' => 'bar']

   )->render(true);

}

public function show():string {

    return View::make('show')->render(true);

}

}