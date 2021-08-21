<?php

namespace App\Models;

class Order extends Model
{

    public function orders() {

        $query = 'SELECT * FROM orders LIMIT 2';
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();

    }

}