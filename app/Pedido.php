<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    // Adicionando relacionamento 1:n com User
    public function user() {
        return $this->belongsTo('App\User');           
    }
}