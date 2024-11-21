@extends('layouts.main')
@section('title', 'APQ Turismo')
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Adicionar um ponto turístico</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        
        <!-- Campo para Imagem -->
        <div class="form-group">
            <label for="image">Imagem do ponto turístico</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        
        <!-- Campo para Nome do Ponto -->
        <div class="form-group">
            <label for="title">Nome do Ponto</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do ponto">
        </div>
        
        <!-- Campo para Data -->
        <div class="form-group">
            <label for="date">Data</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        
        <!-- Campo para Duração -->
        <div class="form-group">
            <label for="duration">Duração (dias)</label>
            <input type="number" class="form-control" id="duration" name="duration" placeholder="Duração em dias">
        </div>
        
        <!-- Campo para Descrição -->
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do lugar"></textarea>
        </div>
        
        <!-- Campo para Localização -->
        <div class="form-group">
            <label for="location">Localização</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Local do ponto">
        </div>
        
        <!-- Campo para Preço -->
        <div class="form-group">
            <label for="price">Preço</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Preço">
        </div>
        
        <!-- Campo para Capacidade -->
        <div class="form-group">
            <label for="capacity">Capacidade (número de vagas)</label>
            <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Número máximo de participantes">
        </div>
        
        <!-- Campo para Itens Incluídos no Pacote -->
        <div class="form-group">
        <label for="title">Itens incluídos no pacote:</label>
        <div class="form-group">
         <input type="checkbox" name="items[]" id="items" value="Transporte"/>Transporte
        </div>
        <div class="form-group">
         <input type="checkbox" name="items[]" id="items" value="hospedagem"/>hospedagem
        </div>
        <div class="form-group">
         <input type="checkbox" name="items[]" id="items" value="passeios guiados"/>passeios guiados
        </div>
        <div class="form-group">
         <input type="checkbox" name="items[]" id="items" value="Acomodações"/>Acomodações
        </div>
        <div class="form-group">
         <input type="checkbox" name="items[]" id="items" value="Acessos Exclusivos"/>Acessos Exclusivos
        </div>
     </div>
        
   
        
        <!-- Botão de Enviar -->
        <input type="submit" class="btn btn-primary" value="Criar um ponto">
    </form>
</div>

@endsection
