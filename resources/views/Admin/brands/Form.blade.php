@extends('adminlte::page')

@section('title', "Brands")

@section('content_header')
   
@stop

@section('content')

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Nueva marca</h3>
        <br>
        <br>
    </div>
        <div class="box-body">
            <form id="brand" method="post" action="{{route('brandsStore')}}" name="brand" role="form">
            @csrf
            <input style="width:50%; padding:5px;" type=text value="" name="name">     
                <button onclick="$('#brand').submit();" type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script> </script>
@stop