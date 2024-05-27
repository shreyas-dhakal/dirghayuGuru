@extends('master')

@section('content')
<section class="doctors py-5">
    <div class="container">
      <h2 class="our-stories text-center pb-5">
        Our <span class="green-text">Team</span>
      </h2>
      <div class="row">
        @foreach ($teams as $team)
        <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic">
                <img src="{{asset($team->image)}}" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <h4>{{$team->name}}</h4>
                <span>{{$team->designation}}</span>
                <p>
                  {{$team->description}}
                </p>
              </div>
            </div>
          </div>
            
        @endforeach
      </div>
    </div>
  </section>

@endsection