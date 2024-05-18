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
          <li class="nav-item">
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
          <li class="nav-item active">
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
<section class="doctors py-5">
    <div class="container">
      <h2 class="our-stories text-center pb-5">
        Our <span class="green-text">Team</span>
      </h2>
      <div class="row">
        @foreach ($teams as $team)
        <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic">
                <img src="{{asset($team->image)}}" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <h4>{{$team->name}}</h4>
                <span>{{$team->designation}}</span>
                <p>
                  {{$team->description}}
                </p>
              </div>
            </div>
          </div>
            
        @endforeach
      </div>
    </div>
  </section>

@endsection