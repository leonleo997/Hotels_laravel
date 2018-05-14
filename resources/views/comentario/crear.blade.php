@extends('home')
@section('infotema')
{!! Form::open(['route'=>'comentarios.store', 'method'=>'POST']) !!}
    <div class="form-group">
        <div class="row">
            <div class="col-md-3">
                    {!!Form::label('Tu correo')!!}
            </div>
            <div class="col-md-9">
                    {!!Form::label('{{$usuario->name}}',['readonly'])!!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-3">
                {!!Form::label('Calificacion')!!}
            </div>
            <div class="col-md-9">
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
            <div class="col-md-3">
                    {!!Form::label('Descripción')!!}
            </div>
            <div class="col-md-9">
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
        {!!Form::submit('Crear Comentario',['class'=>'btn btn-primary'])!!}
    {!! Form::close() !!}
@stop