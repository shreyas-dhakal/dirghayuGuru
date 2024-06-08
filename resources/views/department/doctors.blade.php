@extends('master')

@section('content')
<section class="doctors py-5">
    <div class="container">
        <h2 class="our-stories text-center pb-5">
            <span class="green-text">{{ $department->name }}</span>
        </h2>
        <div class="department-card shadow-lg p-4 mb-5 bg-white rounded mx-auto" style="max-width: 800px;">
            <div class="d-flex flex-column flex-md-row align-items-center">
                <img src="{{ asset($department->image) }}" alt="{{ $department->name }}" class="img-fluid department-image mb-3 mb-md-0" style="max-width: 200px;">
                <div class="ml-md-4 text-center text-md-left">
                    <p class="mt-3 ms-5">{{ $department->description }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($doctors as $doctor)
            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start mt-5 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="pic mr-3">
                        <img src="{{ asset($doctor->image) }}" class="img-fluid rounded-circle doctor-image" alt="{{ $doctor->name }}" />
                    </div>
                    <div class="member-info">
                        <h4 class="doctor-name">{{ $doctor->name }}</h4>
                        <span class="doctor-designation">{{ $doctor->designation }}</span>
                        <p class="doctor-description">{{ $doctor->description }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center">No doctors available.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
