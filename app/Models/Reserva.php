<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'turista_id', 
        'pacote', 
        'numero_pessoas', 
        'data_reserva', 
        'metodo_pagamento', 
        'preco_total', 
        'preferencias'
    ];

    public function turista()
    {
        return $this->belongsTo(Turista::class);
    }
}
