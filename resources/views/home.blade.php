@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12" style="text-align: center; ">
            <div class="container">
                <div class="panel panel-default">
                    <div class="panel-title">
                            <div class="jumbotron">
                                    <h1>Welcome</h1>
                                    <h2>¡Find your hotel!</h2>
                            </div>    
                    </div>
                    <div class="panel-body">
                        @yield('infotema')
                    </div>
                    <div class="row">
                        <a class="btn btn-block btn-primary" href="{{route('hoteles')}}">Crear hoteles</a>
                    </div>
                  </div>
            </div>
       </div>
   </div>
</div>
@endsection
