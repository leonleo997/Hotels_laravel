@extends('home')
@section('infotema')
    
    @if (empty($comentarios)==false)
    <div class="container">
            <div class="jumbotron text-left" style="background: rgba(255, 255, 255, 0.8)">
                    <h1>Comentarios</h1>
                    <h4>En esta sección encontraras todos los comentarios</h4>
                </div>
       @foreach ($comentarios as $comentario)
       <div class="card w-100 mb-3 mx-auto">
            <div class="card-body">
                <div class="row offset-1">
                    <div class="container text-left">
                            <h2 class="card-title">Usuario: {{$comentario->user->name}}</h2>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-8 text-left offset-2">
                            <div class="row">
                                    <div class="col-md-4">
                                            <h3>Correo:</h4>
                                    </div>
                                    <div class="col-md-7">
                                            <h4>{{$comentario->user->email}}</h4>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-4">
                                                <h3>Calificacion:</h4>
                                        </div>
                                        <div class="col-md-7">
                                                <h4>{{$comentario->calificacion}}</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-4">
                                                    <h3>Descripcion:</h4>
                                            </div>
                                            <div class="col-md-7">
                                                    <h4>{{$comentario->descripcion}}</h4>
                                            </div>
                                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       @endforeach
       
    @endif
</div>
<div class="card w-100 mb-3 mx-auto">
        <div class="card-body">
            <div class="jumbotron">
                <h1>Crea tu comentario!</h1>
            </div>

        {!! Form::open(['route'=>'comentarios.store', 'method'=>'POST']) !!}
        <div class="form-group">
            <div class="form-group">
                    <div class="row">
                        <div class="col-md-2 text-left offset-1">
                            <h3>Calificacion: </h3>
                        </div>
                        <div class="col-md-9 text-left  ">
                                {!!Form::label('Una')!!}
                                {!!Form::radio('calificacion', '1', false)!!}
                                {!!Form::label('Dos')!!}
                                {!!Form::radio('calificacion', '2', false)!!}
                                {!!Form::label('Tres')!!}
                                {!!Form::radio('calificacion', '3', true)!!}
                                {!!Form::label('Cuatro')!!}
                                {!!Form::radio('calificacion', '4', false)!!}
                                {!!Form::label('Cinco')!!}
                                {!!Form::radio('calificacion', '5', false)!!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2 text-left offset-1">
                            <h3>Descripción: </h3>
                        </div>
                        <div class="col-md-7">
                                {!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Digite la descripción de su comentario hacia el hotel']) !!}
                        </div>
                    </div>
                    </div>
                    @if ($errors->any())
                    <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li  class="list-group-item list-group-item-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                    <br>
                    @endif
                    {{ form::hidden('hotel_id',$id_hotel)}}
                    {{ form::hidden('user_id',Auth::user()->id)}}

                    <div class="row">
                        <div class="col-md-4 offset-1">
                                {!!Form::submit('Crear comentario',['class'=>'btn btn-primary btn-block'])!!}
                        </div>
                        <div class="col-md-4 offset-2">
                                <a href="{{ route('hoteles.show',$id_hotel) }}" class="btn btn-primary  btn-block" >Atrás</a>
                        </div>

                     </div>

        </div>
        {!! Form::close() !!}
   </div>
   </div>


@stop