@extends('adminlte::page')

@section('title', "Categories")

@section('content_header')
    
@stop

@section('content')

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Categories</h3>
    </div>
        <div class="box-body">
            <form  role="form">
            <input type="hidden" name="_token" value="">            </form>
        </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop