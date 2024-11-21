<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Turista extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'telefone', 'documento'];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
