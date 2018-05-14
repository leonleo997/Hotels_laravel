@extends('home')
@section('infotema')
    <div class="card " style="background: white">
            <div class="card-content" style="margin: 3%">
                    {!! Form::open(['route'=>'hoteles.store', 'method'=>'POST']) !!}
                    <div class="form-group" >
                        <div class="row">
                            <div class="col-md-3">
                                    {!!Form::label('Nombre')!!}
                            </div>
                            <div class="col-md-9">
                                    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Digite el nombre del hotel']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!!Form::label('Costo')!!}
                            </div>
                            <div class="col-md-9">
                                {!! Form::number('costo', null, ['class'=>'form-control', 'placeholder'=>'Digite el costo del hotel']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!!Form::label('Estrellas')!!}
                            </div>
                            <div class="col-md-9">
                                    {!!Form::label('Una')!!} 
                                    {!!Form::radio('estrellas', '1', false)!!} <br>
                                    {!!Form::label('Dos')!!}
                                    {!!Form::radio('estrellas', '2', false)!!} <br>
                                    {!!Form::label('Tres')!!}
                                    {!!Form::radio('estrellas', '3', true)!!} <br>
                                    {!!Form::label('Cuatro')!!}
                                    {!!Form::radio('estrellas', '4', false)!!} <br>
                                    {!!Form::label('Cinco')!!}
                                    {!!Form::radio('estrellas', '5', false)!!} <br>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                    {!!Form::label('Dirección')!!}
                            </div>
                            <div class="col-md-9">
                                    {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Digite la dirección del hotel']) !!}
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                        {!!Form::label('Ciudad')!!}
                                </div>
                                <div class="col-md-9">
                                        {!! Form::text('ciudad', null, ['class'=>'form-control', 'placeholder'=>'Digite la ciudad del hotel']) !!}
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
                        {!!Form::submit('Crear Hotel',['class'=>'btn btn-primary'])!!}
                        <br>
                    {!! Form::close() !!}
            </div>
    </div>
    
@endsection