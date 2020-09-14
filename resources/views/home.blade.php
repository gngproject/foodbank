<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{-- <- bootstrap css --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
    {{-- <title>@yield('title','Laravel 5.8 Basics')</title> --}}
</head>
<body>
    {{-- That's how you write a comment in blade --}}
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">FoodBANK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        TENTANG KAMI
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('tim-kami') }}">TIM KAMI</a>
                        <a class="dropdown-item" href="{{ route('yang-kami-layani') }}">YANG KAMI LAYANI</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        KEGIATAN KAMI
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">KETAHANAN PANGAN</a>
                        <a class="dropdown-item" href="#">MODEL FOODBANK</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        LOKASI
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('lokasi') }}">LOKASI FOODBANK</a>
                       
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        DONASI
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('donasi-dana') }}">DONASI DANA</a>
                        <a class="dropdown-item" href="#">YANG KAMI LAYANI</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        HAL BARU
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">ARTIKEL</a>
                        <a class="dropdown-item" href="#">NEWSLETTER</a>
                      </div>
                  </li>  
              </ul>
          </div>
      </div>
    </nav>  
    <main>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            
        </ol>
      <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('{{ asset('assets/background/3.png') }}')">
        {{-- <img class="img-fluid d-block w-100 h-auto" src="{{ asset('assets/background/3.png')}}" style="opacity: 0.8" alt="First slide"> --}}
            <div class="carousel-caption text-center d-md-block">
              <h5>DUKUNG KAMI UNTUK MENYEDIAKAN MAKANAN</h5>
              <p>Bantu kami dengan donasi dari Anda untuk kehidupan mereka.</p>
              <a class="btn btn-outline-success mt-3" type="button" href="">SELENGKAPNYA</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('{{ asset('assets/background/2.png') }}')">
            {{-- <img class="img-fluid d-block w-100 h-auto" src="{{ asset('assets/background/2.png')}}" style="opacity: 0.8" alt="Second slide"> --}}
            <div class="carousel-caption text-center d-md-block">
              <h5>MARI BUAT MEREKA TERSENYUM KEMBALI</h5>
              <p>Kita harus tahu apa yang terjadi sebenarnya.</p>
              <a class="btn btn-outline-success mt-3" type="button" href="">SELENGKAPNYA</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('{{ asset('assets/background/4.png') }}">
            {{-- <img class="d-block w-100" src="{{ asset('assets/background/4.png')}}" style="opacity: 0.8" alt="Third slide"> --}}
            <div class="carousel-caption text-center d-md-block">
              <h5>KAMI BUTUH BANTUAN ANDA</h5>
              <p>Donasi sekarang dan berikan pengaruh besar bagi mereka yang kelaparan.</p>
              <a class="btn btn-outline-success mt-3" type="button" href="">SELENGKAPNYA</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('{{ asset('assets/background/1.png') }}">
          {{-- <img class="d-block w-100" src="{{ asset('assets/background/1.png')}}" style="opacity: 0.8" alt="Fourth slide"> --}}
          <div class="carousel-caption text-center d-md-block">
            <h5>KITA HARUS BERGERAK</h5>
            <p>Bergerak terus untuk mencapai solusi untuk menyelesaikan masalah kelaparan.</p>
            <a class="btn btn-outline-success mt-3" type="button" href="">SELENGKAPNYA</a>
          </div>
        </div>
      </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    </main>
    @include('footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- <script src="{{asset('js/app.js')}}"></script>  --}}
    
</body>
</html>


