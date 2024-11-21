@extends('layouts.main')
@section('title', "$event->title")

@section('content')
  <div class="container my-5">
    <div class="row">
      <div class="col-md-6">
        <img src="/img/events/{{$event->image}}" class="img-fluid rounded" alt="{{$event->title}}">
      </div>
      
      <div class="col-md-6">
        <h1>{{$event->title}}</h1>
        <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{$event->location}}</p> 
        <p class="event-price"><ion-icon name="pricetag-outline"></ion-icon> Preço: {{$event->price}} MZ</p>
        <p class="event-date"><ion-icon name="calendar-outline"></ion-icon> Data: {{$event->date}}</p>
        <p class="event-duration"><ion-icon name="time-outline"></ion-icon> Duração: {{$event->duration}} dias</p>
        <p class="event-capacity"><ion-icon name="people-outline"></ion-icon> Vagas Disponíveis: {{$event->capacity - $event->participants}}</p>
        <p class="event-organizer"><ion-icon name="person-outline"></ion-icon> Organizado por:</p>
        <p class="event-contact"><ion-icon name="call-outline"></ion-icon> Contato: +258 850354268 / +258 830354268</p>
        
        <div class="d-flex gap-2 mt-3">
          <a href="/events/reserva" class="btn btn-primary" id="event-submit">Agendar Reserva</a>
          <a href="#" class="btn btn-secondary" id="share-event">Compartilhar</a>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-12">
        <div id="description-container" class="p-4 border rounded bg-light">
          <h3>Sobre o lugar:</h3>
          <p class="event-description">{{$event->description}}</p>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-6">
        <div class="p-4 border rounded bg-light">
          <h4>O que está incluído:</h4>
          <ul class="list-unstyled">
          @foreach($event -> items as $item)
            <li><ion-icon name="checkmark-circle-outline"></ion-icon> {{$item}}</li>
            @endforeach
          </ul>
        </div>
      </div>

      
      <div class="col-md-6">
        <div id="reviews-container" class="p-4 border rounded bg-light">
          <h4>Avaliações de outros viajantes:</h4>
          <p class="event-review">"Experiência inesquecível! Recomendo." - João Silva</p>
          <p class="event-review">"Lugar incrível e organização excelente!" - Maria Santos</p>
        </div>
      </div>
    </div>

    <div id="map-container" class="my-4">
    <h4>Localização do Evento</h4>
    <div id="event-map" style="height: 300px; width: 100%;"></div>
</div>

<script>
  function initMap() {
    // Defina as coordenadas do evento
    var eventLocation = { lat: -25.9692, lng: 32.5732 }; // Substitua pela latitude e longitude do local do seu evento

    // Crie o mapa e o associe à div 'event-map'
    var map = new google.maps.Map(document.getElementById('event-map'), {
      center: eventLocation,
      zoom: 14, // Ajuste o zoom conforme necessário
    });

    // Adicione um marcador no local do evento
    var marker = new google.maps.Marker({
      position: eventLocation,
      map: map,
      title: "Local do Evento",
    });
  }

  // Chame a função initMap quando a página carregar
  google.maps.event.addDomListener(window, 'load', initMap);
</script>

  </div>
@endsection
