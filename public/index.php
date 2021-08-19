<?php
use App\Router;
use App\Classes;
require_once __DIR__ . '/../vendor/autoload.php';

$router = new App\Router();

//$router -> register('/' ,

//function () {
   //   echo 'Home Page'; 
   //} // это $action в функции $router->resolve (return call_user_func($action)); 

   //);

 //);
 //var_dump($_SERVER['REQUEST_URI']);
$router 
-> get('/' ,[App\Classes\Home::class,'index'])
// [App\Classes\Home::class,'index'] это $action в функции $router->resolve (return call_user_func($action));
-> get('/show' ,[App\Classes\Home::class,'show'])
-> get('/invoices' ,[App\Classes\Invoice::class,'index'])
// так как router->register возвр self, можно делать цепочку вызовов
-> get('/invoices/create' ,[App\Classes\Invoice::class,'create'])
-> post('/invoices/create' ,[App\Classes\Invoice::class,'store']);


echo $router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD']));
