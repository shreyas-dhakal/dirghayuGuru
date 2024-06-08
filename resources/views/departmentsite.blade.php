@extends('master')

@section('content')
    <section class="Departments py-5">
        <div class="container">
            <h2 class="our-stories text-center pb-5">
                Our <span class="green-text">Departments</span>
            </h2>
            <div class="container text-center my-3">
                <div class="row mx-auto my-auto">
                    @foreach ($departments as $department)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card shadow-lg">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <a href="{{ route('department.doctors', $department->id) }}" class="department-link">
                                    <div class="circle d-flex justify-content-center align-items-center">
                                        <img class="depart-image" src="{{ asset($department->image) }}"
                                            alt="{{ $department->name }}" />
                                    </div>
                                    <div class="depart-name text-center mt-5">{{ $department->name }}</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
