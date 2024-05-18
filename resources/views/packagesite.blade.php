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
            <li class="nav-item active">
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
<section class="packages py-5">
    <div class="container">
      <h2 class="our-stories text-center pb-5">
        Our <span class="green-text">Packages</span>
      </h2>
      <div class="container my-3">
        <div class="row mx-auto my-auto">
            @foreach ($packages as $package)
            <div class="col-sm-4 mb-4">
                <div class="card packages-card">
                  <div class="card-body">
                    <h4 class="package-title text-center mt-3 mb-5">
                      {{$package->title}}
                    </h4>
                    <p class="package-desc px-4 text-center">
                      {{$package->description}}
                    </p>
                    <div class="package-price align-items-center text-center mb-3 mx-auto p-3">
                      <!-- Adjusted width and alignment -->
                      Rs {{$package->price}}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          
        </div>
      </div>
    </div>
  
  </section>
@endsection