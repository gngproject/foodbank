@extends('layout.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="https://i.postimg.cc/bNQp0RDW/1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Banner Text one</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="https://i.postimg.cc/MKqwz5T1/2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Banner Text two</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="https://i.postimg.cc/0y2F6Gpp/3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Banner Text three</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
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
@endsection