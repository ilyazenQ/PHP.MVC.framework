<?php
namespace App\Classes;

class Invoice {

public function index():string {

   return 'InvoicePage';

}
public function create():string  {
   return '
   <form action="/invoices/create" method="post">
  <label for="test">Test:</label>
  <input type="text" name="test">
  </form>';
}
public function store() {
   $amount = $_POST['test'];
   var_dump($amount);
}

}