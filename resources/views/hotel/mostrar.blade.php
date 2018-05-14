@extends('home')
@section('infotema')
    

    @foreach($hoteles as $hotel)
    <div class="card w-75 mb-3 mx-auto">
            <div class="card-body">
                <div class="row">
                    <div class="container text-left">
                            <h2 class="card-title">{{$hotel['nombre']}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="hotel.png" alt="Hotel" class="img-thumbnail">
                    </div>
                    <div class="col-md-8 text-left">
                        <h4>Ciudad: {{$hotel['ciudad']}}</h4>
                        <h4>Calificación promedio: {{$hotel['promedio']}}</h4>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="container">
                                <div class="row mb-3">
                                    <a class="btn btn-primary btn-block" href="{{ route('hoteles.show',$hotel['id']) }}">Ver</a>
                                </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    @endforeach
@endsection