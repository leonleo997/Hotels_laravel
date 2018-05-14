@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12" style="text-align: center; ">
            <div class="container">
                <div class="panel panel-default">

                    <div class="panel-body">
                        @yield('infotema')
                    </div>
                    <br>
                   
                  </div>
            </div>
       </div>
   </div>
</div>
@endsection
