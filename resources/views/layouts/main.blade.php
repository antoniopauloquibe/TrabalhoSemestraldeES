<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
   <!-- CSS Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        
    <link href="https://fonts.googleapis.com/css2?family=Roboto"  rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/animacao.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=SUA_CHAVE_DE_API"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">




    <title>@yield('title')</title>

    
</head>
<body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="collapse navbar-collapse" id="navbar">
              <a href="/" class="navbar-brand">
              <img src="/img/icon_navbar.jpg" alt="APQ Turismo" ><h3>Travel</h3>
              </a>
             

              <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="/events/pacote" class="nav-link">Pacotes</a>
                </li>

                <li class="nav-item">
                    <a href="/events/reserva" class="nav-link">Reserva</a>
                </li>

                <li class="nav-item">
                    <a href="/events/cliente" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/cliente" class="nav-link">Guias Turismo</a>
                </li>
               <!-- <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar</a>
                </li>-->

                @auth

                <li class="nav-item">
                    <a href="/dashbord" class="nav-link">Gestao das Reservas</a>
                </li>
                 
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="nav-link" onclick="event.preventDefault();
                        this.closest('form').submit();">Sair</a>
                    </form>  
                  </li>

                @endauth

                @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>

                
                 @endguest

                <li class="nav-item">
                    <a href="/events/sobre" class="nav-link">Ajuda</a>
                </li>

                </ul>
              </div>
            </nav>
       </header>





 @yield('content')
<!-- <footer>
    <p>APQ Turismo &copy; 2024 antoniopauloquibe@gmail.com</p>
    <p></p>
 </footer>-->
 <footer >
    <div class="container">
        <!-- Seção de inscrição -->
        <div class="text-center mb-5">
            <h2 class="mb-3">Travel with us</h2>
            <div class="input-group w-50 mx-auto">
                <input type="email" class="form-control" placeholder="Enter Email Address">
                <button class="btn btn-primary">Send</button>
            </div>
        </div>

        <!-- Corpo do Footer -->
        <div class="row text-center text-md-start">
            <!-- Logo e descrição -->
            <div class="col-md-3 mb-4">
                <h3>Travel.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullam inventore eos fuga hic cum voluptatem.</p>
                <div class="d-flex justify-content-center justify-content-md-start mt-3">
                    <a href="#" class="me-3"><i class="bi bi-facebook text-light fs-4"></i></a>
                    <a href="#" class="me-3"><i class="bi bi-twitter text-light fs-4"></i></a>
                    <a href="#"><i class="bi bi-instagram text-light fs-4"></i></a>
                </div>
            </div>

            <!-- Links úteis -->
            <div class="col-md-3 mb-4">
                <h4>Our Agency</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Services</a></li>
                    <li><a href="#" class="text-light">Insurance</a></li>
                    <li><a href="#" class="text-light">Agency</a></li>
                    <li><a href="#" class="text-light">Tourism</a></li>
                    <li><a href="#" class="text-light">Payment</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h4>Partners</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Booking</a></li>
                    <li><a href="#" class="text-light">RentalCar</a></li>
                    <li><a href="#" class="text-light">HostelWorld</a></li>
                    <li><a href="#" class="text-light">Trivago</a></li>
                    <li><a href="#" class="text-light">TripAdvisor</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h4>Last Minute</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">London</a></li>
                    <li><a href="#" class="text-light">California</a></li>
                    <li><a href="#" class="text-light">Indonesia</a></li>
                    <li><a href="#" class="text-light">Europe</a></li>
                    <li><a href="#" class="text-light">Oceania</a></li>
                </ul>
            </div>
        </div>

        <!-- Seção de direitos autorais -->
        <div class="text-center mt-4">
            <p>APQ Turismo &copy; 2024 antoniopauloquibe@gmail.com</p>
            <p>Best Travel Website Theme &copy; 2022</p>
            <p>Copyrights Reserved - ISRATECH 2022</p>
        </div>
    </div>
</footer>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=SUA_CHAVE_DE_API"></script>


        
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    
</body>
</html>