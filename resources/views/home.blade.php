@extends('layouts.main')

@section('content')

<div class="container-sm  h-100 ">
    <div class="row h-100 d-flex align-items-center">
        @foreach ( $trains as $train )
            <div class="col-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Company: {{$train->agency}}</h5>
                      <p class="card-text">Departure: {{$train->departure_station}}</p>
                      <p class="card-text">Arrival: {{$train->arrival_station}}</p>
                      <p class="card-text">Departure Time: {{$train->departure_time }}</p>
                      <p class="card-text">Arrival Time: {{$train->arrival_time }}</p>
                      <p class="card-text">Code {{$train->code}}</p>

                      <div class="circle {{ $train->is_in_time === 1 ? 'green' : 'red' }}"></div>

                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
