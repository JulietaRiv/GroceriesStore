@extends('adminlte::page')

@section('title', "Categories")

@section('content_header')
    
@stop

@section('content')

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Categoría {{ $category->name }}</h3>
    </div>
    <br>
    <br>
        <div class="box-body">
            <form id="categEdit" method="post" action="{{route('categoriesUpdate')}}" name="categEdit" role="form">
            @csrf
                <input style="width:50%; padding:5px;" type=text value="{{$category->name}}" name="nameEdit">
                <input type="hidden" name="id" value="{{$category->id}}">
                <button onclick="$('#categEdit').submit();" type="submit" class="btn btn-success">Guardar</button>      
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