@extends('layouts.app')

@section('content') 
<div class="panel panel-default">
    <div class="panel-body">
            <div class="jumbotron">
                <h1>Bienvenido a Hoteles</h1>
            </div> 
    </div>
  </div>
   @yield('contenidoHotel')
   @yield('contentComentario')
@endsection
