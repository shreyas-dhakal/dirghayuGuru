@extends('master')

@section('content')
<section class="doctors py-5">
    <div class="container">
        <h2 class="our-stories text-center pb-5">
            Doctors in <span class="green-text">{{ $department->name }}</span>
        </h2>
        <div class="row">
            @forelse ($doctors as $doctor)
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member d-flex align-items-start mt-5">
                    <div class="pic">
                        <img src="{{ asset($doctor->image) }}" class="img-fluid" alt="{{ $doctor->name }}" />
                    </div>
                    <div class="member-info">
                        <h4>{{ $doctor->name }}</h4>
                        <span>{{ $doctor->designation }}</span>
                        <p>{{ $doctor->description }}</p>
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
