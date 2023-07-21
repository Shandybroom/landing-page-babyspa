<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Honey Mom & Baby Spa</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar fixed-top navbar-expand-lg navbar-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{url('images/logo.png')}}" alt="Bootstrap" width="210" height="50">
            </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item mx-1">
                <a class="nav-link active" aria-current="page" href="#">Layanan</a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="#">Kontak</a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="#">Booking</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- end navbar --}}

      <section id="hero">
        <img class="waves" src="{{asset('images/wave.svg')}}" alt="">
        <img class="picture" src="{{asset('images/picture.png')}}" alt="">
        <div class="tagline">
            <div class="row">
                <div class="col">
                    <h1>Honey Baby Spa</h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, iusto reprehenderit quod praesentium perspiciatis repudiandae sunt, unde iure nulla ut dolorum ullam totam at id tenetur quia rerum voluptatibus ipsa?</p>
                    <br>
                    <button type="button" class="custom-btn">BOOKING</button>
                </div>
            </div>
        </div>
      </section>
</body>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
