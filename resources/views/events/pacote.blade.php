@extends('layouts.main')
@section('title', 'APQ Turismo')
@section('content')




<div class="container my-5">
    <h1 class="text-center mb-4">Pacotes de Turismo</h1>

    <div class="row">
        <!-- Exemplo de Pacote -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="../img/imagem9.jpg" class="card-img-top" alt="Pacote 1">
                <div class="card-body">
                    <h5 class="card-title">Pacote para a Praia</h5>
                    <p class="card-text">Desfrute de um fim de semana relaxante na praia com tudo incluso: transporte, alimentação e atividades recreativas.</p>
                    <p><strong>Preço:</strong> R$ 1.200,00</p>
                    <a href="/events/reserva" class="btn btn-primary">Reservar Agora</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="../img/imagem2.jpg" class="card-img-top" alt="Pacote 2">
                <div class="card-body">
                    <h5 class="card-title">Pacote de Aventura</h5>
                    <p class="card-text">Uma experiência emocionante para quem ama aventuras ao ar livre, com trilhas, escalada e muito mais.</p>
                    <p><strong>Preço:</strong> R$ 950,00</p>
                    <a href="/events/reserva" class="btn btn-primary">Reservar Agora</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="../img/imagem5.jpg" class="card-img-top" alt="Pacote 3">
                <div class="card-body">
                    <h5 class="card-title">Pacote Cultural</h5>
                    <p class="card-text">Mergulhe na cultura local com visitas a museus, shows e passeios históricos.</p>
                    <p><strong>Preço:</strong> R$ 850,00</p>
                    <a href="/events/reserva" class="btn btn-primary">Reservar Agora</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="../img/search.jpg" class="card-img-top" alt="Pacote 3">
                <div class="card-body">
                    <h5 class="card-title">Pacote Cultural</h5>
                    <p class="card-text">Mergulhe na cultura local com visitas a museus, shows e passeios históricos.</p>
                    <p><strong>Preço:</strong> R$ 850,00</p>
                    <a href="/events/reserva" class="btn btn-primary">Reservar Agora</a>
                </div>
            </div>
        </div>


        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="../img/search2.jpg" class="card-img-top" alt="Pacote 3">
                <div class="card-body">
                    <h5 class="card-title">Pacote Cultural</h5>
                    <p class="card-text">Mergulhe na cultura local com visitas a museus, shows e passeios históricos.</p>
                    <p><strong>Preço:</strong> R$ 850,00</p>
                    <a href="/events/reserva" class="btn btn-primary">Reservar Agora</a>
                </div>
            </div>
        </div>


        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="../img/search4.jpg" class="card-img-top" alt="Pacote 3">
                <div class="card-body">
                    <h5 class="card-title">Pacote Cultural</h5>
                    <p class="card-text">Mergulhe na cultura local com visitas a museus, shows e passeios históricos.</p>
                    <p><strong>Preço:</strong> R$ 850,00</p>
                    <a href="/events/reserva" class="btn btn-primary">Reservar Agora</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Se você tiver mais pacotes, pode replicar o código acima e adicionar mais pacotes -->
</div>





@endsection