@extends('master')

@section('content')
    <section class="Doctors py-5">
        <div class="container">
            <h2 class="our-stories text-center pb-5">
                Doctors in <span class="green-text">{{ $department->name }}</span>
            </h2>
            <div class="container text-center my-3">
                <div class="row mx-auto my-auto">
                    @foreach ($doctors as $doctor)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="card shadow-lg">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <div class="circle d-flex justify-content-center align-items-center">
                                        <img class="doctor-image" src="{{ asset($doctor->image) }}" alt="{{ $doctor->name }}" />
                                    </div>
                                    <div class="doctor-name text-center mt-5">{{ $doctor->name }}</div>
                                    <div class="doctor-designation text-center">{{ $doctor->designation }}</div>
                                    <div class="doctor-nmc text-center">{{ $doctor->nmc_reg }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
