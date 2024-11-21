<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turista;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:turistas,email',
            'telefone' => 'required',
            'pacote' => 'required',
            'numero_pessoas' => 'required|integer',
            'data_reserva' => 'required|date',
            'metodo_pagamento' => 'required',
            'preco_total' => 'required|numeric',
        ]);

        $turista = Turista::create($request->only('nome', 'email', 'telefone', 'documento'));

        $turista->reservas()->create($request->only('pacote', 'numero_pessoas', 'data_reserva', 'metodo_pagamento', 'preco_total', 'preferencias'));

        return redirect()->back()->with('success', 'Reserva realizada com sucesso!');
    }
}