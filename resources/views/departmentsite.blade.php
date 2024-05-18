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
            <li class="nav-item active">
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
<section class="Departments py-5">
    <div class="container">
      <h2 class="our-stories text-center pb-5">
        Our <span class="green-text">Departments</span>
      </h2>
      <div class="container text-center my-3">
        <div class="row mx-auto my-auto">
        @foreach ($departments as $department)
            <div class="col-sm-3 mb-4">
            <div class="card shadow-lg">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <div class="circle d-flex justify-content-center align-items-center">
                  <img class="depart-image" src="{{asset($department->image)}}" alt="{{$department->name}}" />
                </div>
                <div class="depart-name text-center mt-5">{{$department->name}}</div>
              </div>
            </div>
          </div>
        @endforeach 
        </div>
      </div>
    </div>
    
  </section>
@endsection('content')