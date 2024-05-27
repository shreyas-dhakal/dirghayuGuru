@extends('master')


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