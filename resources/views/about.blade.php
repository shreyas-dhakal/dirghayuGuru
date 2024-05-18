@extends('master')

@section('navbar')
<section class="menu">
  <nav class="navbar navbar-expand-md">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapse"
        aria-controls="menuCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="menuCollapse">
        <ul class="navbar-nav gap-5">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('about')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('departments')}}">Departments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('doctors')}}">Our Doctors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('packages')}}">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('teams')}}">Our Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact.create')}}">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>

@endsection
@section('content')
<section class="about-section">
    <div class="container text-center my-5">
      <h2>
        Our <span class="green-text">Vision</span>
      </h2>
      <div class="row d-flex justify-content-between align-items-center mt-5 mb-0">
        <div class="col-md-5">
          <img src="{{asset($informations->vision_image)}}" class="about-image rounded-5 my-3" alt="">
        </div>
        <div class="col-md-7">
          <p class="our-vision text-start mx-3 my-2" style="line-height: 1.6">
            {{$informations->vision}}
          </p>
        </div>
      </div>
    </div>
  

  <div class="container text-center my-5">
    <h2>
      Chairman's<span class="green-text"> Greeting</span>
    </h2>
    <div class="row d-flex justify-content-between align-items-center mt-5 mb-0">
      <div class="col-md-7">
        <p class="our-vision text-start mx-3 my-2" style="line-height: 1.6">
          {{$informations->greeting}}
        </p>
      </div>
      <div class="col-md-5">
        <img src="{{asset($informations->greeting_image)}}" class="about-image rounded-5 my-3" alt="">
      </div>
    </div>
  </div>
</section>2







@endsection