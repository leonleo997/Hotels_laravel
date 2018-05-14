@extends('home')
@section('infotema')
<div class="card w-100  ">
        <div class="card-body">
          <div class="jumbotron">
                <h1 class="card-title mb-3">{{$hotel->nombre}}</h1>
          </div>
          <div class="row mb-2">
              <div class="col-md-3"><label for="">Costo de habitación</label></div>
              <div class="col-md-7"><input class="form-control" type="text" placeholder="{{$hotel->costo}}" readonly>
              </div>
          </div>
          <div class="row mb-2">
                <div class="col-md-3"><label for="">Estrellas</label></div>
                <div class="col-md-7"><input class="form-control" type="text" placeholder="{{$hotel->estrellas}}" readonly>
                </div>
            </div>
            <div class="row mb-2">
                    <div class="col-md-3"><label for="">Direccion</label></div>
                    <div class="col-md-7"><input class="form-control" type="text" placeholder="{{$hotel->direccion}}" readonly>
                    </div>
                </div>
                <div class="row mb-2">
                        <div class="col-md-3"><label for="">Ciudad</label></div>
                        <div class="col-md-7"><input class="form-control" type="text" placeholder="{{$hotel->ciudad}}" readonly>
                        </div>
                    </div>
                    <br>
          <div class="row">
              <div class="col-md-3 offset-2"><a href="{{ route('hoteles.index')}}" class="btn btn-primary btn-block" >Atrás</a></div>
              <div class="col-md-3 offset-2"><a href="{{ route('comentarios.show', $hotel->id)}}" class="btn btn-primary btn-block" >Comentarios</a></div>
          </div>
          @yield('comentariosContent')

      </div>
@endsection