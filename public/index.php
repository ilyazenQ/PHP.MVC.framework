<?php
use App\Router;
use App\Controllers;
require_once __DIR__ . '/../vendor/autoload.php';

const VIEW_PATH = __DIR__ . '/../views';

$router = new App\Router();

//$router -> register('/' ,

//function () {
   //   echo 'HomeController Page';
   //} // это $action в функции $router->resolve (return call_user_func($action)); 

   //);

 //);
 //var_dump($_SERVER['REQUEST_URI']);
$router 
-> get('/' ,[App\Controllers\HomeController::class,'index'])
// [App\Classes\HomeController::class,'index'] это $action в функции $router->resolve (return call_user_func($action));
-> get('/show' ,[App\Controllers\HomeController::class,'show'])
-> get('/invoices' ,[App\Controllers\InvoiceController::class,'index'])
// так как router->register возвр self, можно делать цепочку вызовов
-> get('/invoices/create' ,[App\Controllers\InvoiceController::class,'create'])
-> post('/invoices/create' ,[App\Controllers\InvoiceController::class,'store']);


echo $router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD']));
