<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public function cliente() {

        return $this->belongsTo(Cliente::class);

    }

    public function carro() {

        return $this->belongsTo(Carro::class);

    }

}
