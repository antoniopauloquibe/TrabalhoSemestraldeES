@extends('layouts.main')
@section('title', 'APQ Turismo')
@section('content')




<div id="search-container" class="col-md-12">
    <h1>Busque os pontos turisticos</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procure....">
    </form>
</div>


<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{$search}}</h2>
    @else
    <h2>Pontos turistico</h2>
    <p class="subtitle">Veja Lista de Pontos Turisticos</p>
    @endif
    <div id="cards-container" class="row">
    @foreach($events as $event)
    <div class="card col-md-3">
      <img src="/img/events/{{$event->image}}" alta="{{$event->title}}">
       <div class="card-body">
       <!-- <p class="card-date">1/09/2024</p>-->
         <h5 class="card-title">{{$event->title}}</h5>
        <!-- <p class="card-participants">{{$event->description}}</p>-->
         <p class="card-participants">{{$event->location}}</p>
         <p class="card-participants">{{$event->price}} MZ</p>
         <p class="card-participants">Classificacao</p> 
         <a href="/events/{{$event -> id}}" class="btn btn-primary">Saber mais</a>
         </div>
       </div>
       @endforeach
       @if(count($events) == 0 && $search)
       <p>Nao, foi possivel encontrar nenhum ponto turisco com {{$search}}! <a href="/">Ver todos</a></p>
       @elseif(count($events) ==0)
       <p>Nao, ha pontos turisticos disponiveis</p>
       @endif
    </div>
</div>

<script>
    // Array com as URLs das imagens
    const images = [
        /*"../img/imagem2.jpg",
        "../img/imagem5.jpg",
        "../img/imagem9.jpg",
        "../img/search.jpg",
        "../img/search2.jpg",
        "../img/search4.jpg",*/
        "../img/imagem9.jpg",
       
         // Adicione quantas imagens quiser
    ];

    let currentIndex = 0; // Índice da imagem atual

    function changeBackgroundImage() {
        // Atualiza a imagem de fundo
        const searchContainer = document.getElementById('search-container');
        searchContainer.style.backgroundImage = `url('${images[currentIndex]}')`;
        
        // Atualiza o índice para a próxima imagem
        currentIndex = (currentIndex + 1) % images.length; // Volta ao início se chegar ao final
    }

    // Troca a imagem a cada 5 segundos
    setInterval(changeBackgroundImage, 5000);

    // Troca a imagem uma vez ao carregar a página
    changeBackgroundImage();
</script>




@endsection