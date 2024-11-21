
@extends('layouts.main')

@section('title', 'Reserva de Turismo')

@section('content')
<div class="container my-5">
    <h1>Fazer Reserva</h1>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Dados Pessoais do Turista -->
        <h3>Informações do Turista</h3>
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password" required>
         </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="form-group">
            <label for="documento">Documento de Identificação</label>
            <input type="text" class="form-control" id="documento" name="documento">
        </div>

        <!-- Detalhes da Reserva -->
        <h3>Detalhes da Reserva</h3>
        <div class="form-group">
            <label for="pacote">Pacote/Atividade</label>
            <input type="text" class="form-control" id="pacote" name="pacote" required>
        </div>
        <div class="form-group">
            <label for="numero_pessoas">Número de Pessoas</label>
            <input type="number" class="form-control" id="numero_pessoas" name="numero_pessoas" required>
        </div>
        <div class="form-group">
            <label for="data_reserva">Data da Reserva</label>
            <input type="date" class="form-control" id="data_reserva" name="data_reserva" required>
        </div>

        <!-- Pagamento e Preferências -->
        <h3>Informações de Pagamento</h3>
        <div class="form-group">
            <label for="metodo_pagamento">Método de Pagamento</label>
            <select class="form-control" id="metodo_pagamento" name="metodo_pagamento" required>
                <option value="Cartão de Crédito">Cartão de Crédito</option>
                <option value="Débito">Débito</option>
                <option value="Transferência Bancária">Transferência Bancária</option>
            </select>
        </div>
        <div class="form-group">
            <label for="preco_total">Preço Total (R$)</label>
            <input type="number" class="form-control" id="preco_total" name="preco_total" required>
        </div>
        <div class="form-group">
            <label for="preferencias">Preferências (opcional)</label>
            <textarea class="form-control" id="preferencias" name="preferencias" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Confirmar Reserva</button>
    </form>
</div>
@endsection
