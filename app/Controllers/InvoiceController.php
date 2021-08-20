<?php
namespace App\Controllers;

use App\View;

class InvoiceController {

public function index():string {

    return View::make('invoices/index')->render();

}
public function create():string  {
    return View::make('invoices/index')->render();
}
public function store() {
   $amount = $_POST['test'];
   var_dump($amount);
}

}