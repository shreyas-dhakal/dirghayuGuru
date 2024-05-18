<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  
  
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
 
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Poppins&family=Questrial&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Ephesis&family=Oxygen:wght@300;400;700&family=Poppins&family=Questrial&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite(['resources/css/home.css','resources/sass/app.scss', 'resources/js/app.js', 'resources/js/site.js'])
  <title>{{$sitesettings->name}}</title>
</head>
<body lang="en">

    <!-- Start Header -->
    <header class="header">
      @section('header')
      <!-- Topbar -->
      <section class="topbar">
        <div class="container d-flex justify-content-between align-items-center">
          <div class="text-section">
            <div class="info py-2">
              <div class="text-sm">Appointment: +977 {{$sitesettings->phone_number1}}</div>
              <div class="text-sm px-5">Emergency: +977 {{$sitesettings->phone_number2}}</div>
            </div>
          </div>
          <div class="social-icons">
            <a href="{{$sitesettings->link1}}" class="fab fa-facebook-square mx-1"></a>
            <a href="{{$sitesettings->link2}}" class="fab fa-instagram-square mx-1"></a>
            <a href="{{$sitesettings->link3}}" class="fab fa-twitter-square mx-1"></a>
            
          </div>
          @if (Route::has('login') && Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </div>
            @elseif (Route::has('login') && !Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                </div>
            @endif
        </div>
      </section>
      <!-- Topbar end -->
    
      <!-- Logo and Button -->
      <section class="logo-and-button">
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
          <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="index.html">
              <img id="DGH-Logo" src="{{asset($sitesettings->logo)}}" alt="Logo" draggable="false" height="110" />
            </a>
            <div class="Book-an-appointment">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="btn btn-primary" id="appointment" href="{{ route('appointment.create') }}">Book an Appointment</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </section>
      @yield('navbar')
      @show
      <!-- End Menu Section -->
    </header>
    <main>
        @yield('content')
    </main>
    <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 footer-contact mb-md-0 mb-4">
                <a href="index.html">
                <img src="{{asset($informations->logo)}}" height="90" alt="log"/>
              </a>
                <p class="mt-5">
                  {{$informations->footer}}
                </p>
      
               </div>
      
              <div class="col-lg-4 col-md-6 footer-links px-5">
                <h4>Quick Links</h4>
                <ul>
                  <li><a href="{{route('home')}}" class="text-decoration-none">Home</a></li>
                  <li><a href="{{route('about')}}" class="text-decoration-none">About us</a></li>
                  <li><a href="{{route('departments')}}" class="text-decoration-none">Departments</a></li>
                  <li><a href="{{route('doctors')}}" class="text-decoration-none">Doctors</a></li>
                  <li><a href="{{route('packages')}}" class="text-decoration-none">Packages</a></li>
                  <li><a href="{{route('appointment.create')}}" class="text-decoration-none">Book an Appointment</a></li>
                </ul>
              </div>
      
              <div class="col-lg-4 col-md-6 footer-links">
                <h4 class="mx-2">Our Services</h4>
                <ul class="list-unstyled">
                  <li class="mb-2">
                    <i class="fas fa-map-marker-alt mx-2"></i> {{$sitesettings->address}}
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-envelope-open-text mx-2"></i> {{$sitesettings->email1}}
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-phone-alt mx-2"></i> +977 {{$sitesettings->phone_number1}}
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-ambulance mx-2"></i>+977 {{$sitesettings->phone_number2}}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      
        <div class="copyright d-flex py-4">
          <div class="container me-md-auto text-center text-md-start">
            
              &copy; Copyright <strong><span>Dirghayu Guru Hospital</span></strong>. All Rights Reserved
            
          </div>
        </div>
      </footer>
      <!-- End Footer -->
      
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      
         <script>
          const swiper = new Swiper('.mySwiper', {  
      
            initialSlide:0, 
            effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            }
          });
        </script>
      </body>
      
      </html>