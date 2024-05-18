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
          <li class="nav-item active">
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
  <div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
      @foreach ($sliders as $slider)
        
      
      <div class="swiper-slide">
        <div class="swiper-slide-overlay swiperClass">
          <img src="{{asset($slider->image)}}" alt="{{$slider->name}}" class="slider-image" />
          <div class="container">
            <div class="overlay-text d-flex flex-column flex-lg-row align-items-lg-center">
              <div class="line d-none d-lg-block"></div>
              <div class="message px-3 py-4">
                <h2 class="large-text text-center text-lg-start">Welcome To</h2>
                <p class="small-text text-center text-lg-start mb-0">
                  Dirghayu Guru Hospital
                </p>
                <!-- Navigation buttons -->
                <div class="navigation-buttons text-center mt-3 d-flex">
                  <div class="swiper-button-prev me-2"></div>
                  <div class="swiper-button-next ms-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>


  <!-- About Us -->
  <section class="about-us pt-5">
    <div class="container">
      <h2 class="our-stories text-center pb-4 pb-md-5">
        Our <span class="green-text">Stories</span>
      </h2>
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="about-body">
            <p class="first-paragraph" style="line-height: 1.6">
              {{$informations->story}}
            </p>
          </div>
          <a class="btn btn-primary mt-4" href="{{route('about')}}">Know More</a>
        </div>
        <div class="col-md-6">
          <div class="about-image text-center align-items-center">
            <img src="{{asset($informations->story_image)}}"  alt="About Us Image" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Us -->

  <!-- Department -->
  <section class="Departments-home py-5">
    <div class="container">
      <h2 class="our-stories text-center pb-5">
        Our <span class="green-text">Departments</span>
      </h2>
      <div class="container text-center my-3">
        <div class="row mx-auto my-auto">
          @foreach ($departments as $department)
          <div class="col-sm-3 mb-4">
            <div class="card">
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
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center">
        <a href="{{route('departments')}}" class="btn btn-primary mt-5">Explore All</a>
      </div>
    </div>
  </section>
  <!-- End Department -->

  <!-- Our Doctors -->
  <section class="doctors py-5">
    <div class="container">
      <h2 class="our-stories text-center pb-5">
        Our <span class="green-text">Doctors</span>
      </h2>
      <div class="row">
        @foreach ($doctors as $doctor)
        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start">
            <div class="pic">
              <img src="{{$doctor->image}}" class="img-fluid" alt="" />
            </div>
            <div class="member-info">
              <h4>{{$doctor->name}}</h4>
              <span>{{$doctor->designation}}</span>
              <p>
                {{$doctor->description}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="row justify-content-center mt-3">
      <div class="col-sm-6 text-center">
        <a href="{{route('doctors')}}" class="btn btn-primary mt-5">Explore All</a>
      </div>
    </div>
  </section>
  <!-- End Our Doctors -->

  <!-- Testimonials -->
  <section class="testimonials swiper">
    <div class="container">
      <h2 class="our-stories text-center pb-5">
        Client Testimonials
      </h2>
      <swiper-container class="swiper-container mySwiperTestimonial" pagination="true" effect="coverflow" grab-cursor="true"
  centered-slides="true" slides-per-view="3" coverflow-effect-rotate="3" coverflow-effect-stretch="3"
  coverflow-effect-depth="100" coverflow-effect-modifier="3" coverflow-effect-slide-shadows="true"
  initial-slide="2">
      @foreach ($testimonials as $testimonial)
      
        <swiper-slide class="mb-5">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="testimonial-wrap text-center p-3">
                    <div class="testimonial-item">
                      <img src="{{asset($testimonial->image)}}" class="testimonial-img rounded-circle my-3" alt="" />
                      <p>
                        {{$testimonial->description}}
                      </p>
                      <h3 class="pt-3">{{$testimonial->title}}</h3>
                      <h5 class="pb-3">{{$testimonial->designation}}</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
        @endforeach
      </swiper-container>
    </div>
  </section>
  <!-- Testimonials -->

   <!-- Our Packages -->
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
                  Rs. {{$package->price}}
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center">
        <a href="{{route('packages')}}" class="btn btn-primary mt-5">Explore All</a>
      </div>
    </div>
  </section>

@endsection