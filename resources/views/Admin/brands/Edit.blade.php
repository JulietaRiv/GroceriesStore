@extends('adminlte::page')

@section('title', "Brands")

@section('content_header')
    
@stop

@section('content')

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Marca {{ $brand->name }}</h3>
    </div>
    <br>
    <br>
        <div class="box-body">
            <form id="brandEdit" method="post" action="{{route('brandsUpdate')}}" name="brandEdit" role="form">
            @csrf
            <input style="width:50%; padding:5px;" type=text value="{{$brand->name}}" name="nameEdit">
            <input type="hidden" name="id" value="{{$brand->id}}">
            <button onclick="$('#brandEdit').submit();" type="submit" class="btn btn-success">Guardar</button>      
            </form>
        </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop