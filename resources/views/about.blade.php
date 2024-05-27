@extends('master')

@section('content')
<section class="about-section">
    <div class="container text-center my-5">
        <h2>
            Our <span class="green-text">Vision</span>
        </h2>
        <div class="row d-flex justify-content-between align-items-center mt-5 mb-0">
            <div class="col-md-5 order-md-1 order-1">
                <img src="{{ asset($informations->vision_image) }}" class="about-image rounded-5 my-3" alt="Vision Image">
            </div>
            <div class="col-md-7 order-md-2 order-2">
                <p class="our-vision text-start mx-3 my-2" style="line-height: 1.6">
                    {{ $informations->vision }}
                </p>
            </div>
        </div>
    </div>

    <div class="container text-center my-5">
        <h2>
            Chairman's <span class="green-text">Greeting</span>
        </h2>
        <div class="row d-flex justify-content-between align-items-center mt-5 mb-0">
            <div class="col-md-7 order-md-1 order-2">
                <p class="our-vision text-start mx-3 my-2" style="line-height: 1.6">
                    {{ $informations->greeting }}
                </p>
            </div>
            <div class="col-md-5 order-md-2 order-1">
                <img src="{{ asset($informations->greeting_image) }}" class="about-image rounded-5 my-3" alt="Greeting Image">
            </div>
        </div>
    </div>
</section>
@endsection
