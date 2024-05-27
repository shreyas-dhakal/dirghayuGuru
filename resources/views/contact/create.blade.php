@extends('master')

@section('content')
<section class=" py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-md-center">
          <h2 class="our-stories text-center pb-5">
          Contact <span class="green-text">Us</span>
        </h2>
        </div>
    </div>
</section>

<div class="container mb-5">
    <div class="row my-4">
        <div class="contact-form col-md-7 ms-5 mt-3">
            <h3 class="text-center">Fill Out the Form to Reach Us</h3>
            <p class="text-secondary my-3 text-center">The best way to contact us is to use our contact form below. Please fill out all of the required fields and we will get back to you as soon as possible.</p>
            <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                @method('post')
                <div class="col-12">
                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" id="name" class="form-control" id="fullname" name="name" value="" required>
                </div>
                <div class="col-12 mt-3">
                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" id="email" class="form-control" id="email" name="email" value="" required>
                </div>
                <div class="col-12 mt-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" id="phone" class="form-control" id="phone" name="phone" value="">
                </div>
                <div class="col-12 mt-3">
                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="col-12 mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

        <div class="contact-info col-md-4 d-flex flex-column justify-content-center align-items-center px-5 py-5 shadow-lg text-center text-white mt-3">
            <h4>Get in Contact with us</h4>
            <div class="address text-white text-center py-3">
                <i class="fas fa-map-marker-alt fa-3x my-3"></i>
                <p class="mb-0"><span>Visit us at</span></p>
                <h6 class="mb-0">{{$sitesettings->address}}</h6>
            </div>
            <div class="address text-white text-center py-3">
                <i class="fas fa-envelope-open-text fa-3x my-3"></i>
                <p class="mb-0"><span>Email us at</span></p>
                <h6 class="mb-0">{{$sitesettings->email_1}}</h6>
            </div>
            <div class="address text-white text-center py-3">
                <i class="fas fa-phone-alt fa-3x my-3"></i>
                <p class="mb-0"><span>Call us at</span></p>
                <h6 class="mb-0">+977-{{$sitesettings->phone_number1}}</h6>
            </div>
        </div>
    </div>
</div>

<section class="map-section mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.3418159390347!2d85.34258659999999!3d27.714505899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197a7b054a87%3A0x5e9c9d3f9f72f10a!2sDirghayu%20Guru%20Hospital%20%26%20Research%20Center!5e0!3m2!1sen!2snp!4v1649878517862!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection
