@extends('home')
@section('infotema')
    <div class="card " style="background: white">
            <div class="card-content" style="margin: 3%">
                <div class="jumbotron">
                        <h1>¡Crea un hotel!</h1>
                </div>
                <br>
                    {!! Form::open(['route'=>'hoteles.store', 'method'=>'POST']) !!}
                    <div class="form-group" >
                            <div class="row">
                                    <div class="col-md-4 mx-auto">
                                            {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Digite el nombre del hotel']) !!}
                                    </div>
                                    <div class="col-md-4 offset-1 mx-auto">
                                            {!! Form::number('costo', null, ['class'=>'form-control', 'placeholder'=>'Digite el costo del hotel']) !!}
                                    </div>
                            </div>
                            <br>
                            <div class="row border" style="margin-left: 10%; margin-right: 10%">
                                    <div class="col-md-2 mx-auto">
                                            <label class=" h-100 align-text-bottom">Estrellas:</label>
                                    </div>
                                <div class="col-md-1 mx-auto">
                                        {!!Form::label('Una')!!} <br>   
                                        {!!Form::radio('estrellas', '1', true)!!}
                                </div>
                                <div class="col-md-1 mx-auto">
                                        {!!Form::label('Dos')!!} <br>
                                        {!!Form::radio('estrellas', '2', false)!!}
                                </div>
                                <div class="col-md-1 mx-auto">
                                        {!!Form::label('Tres')!!} <br>
                                        {!!Form::radio('estrellas', '3', false)!!}
                                </div>
                                <div class="col-md-1 mx-auto">
                                        {!!Form::label('Cuatro')!!} <br>
                                        {!!Form::radio('estrellas', '4', false)!!}
                                </div>
                                <div class="col-md-1 mx-auto"> 
                                        {!!Form::label('Cinco')!!} <br> 
                                        {!!Form::radio('estrellas', '5', false)!!}
                                </div>                               
                            </div>
                            <br>
                    <div class="row">
                            <div class="col-md-4 mx-auto">
                                    {!! Form::text('ciudad', null, ['class'=>'form-control', 'placeholder'=>'Digite la ciudad del hotel']) !!}
                                </div>
                            <div class="col-md-4 mx-auto offset-1">
                                    {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Digite la dirección del hotel']) !!}
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
                        <div class="form-group">
                                {!!Form::submit('Crear Hotel',['class'=>'btn btn-primary btn-block'])!!}
                        </div>
                        <br>
                    {!! Form::close() !!}
            </div>
    </div>
    
@endsection