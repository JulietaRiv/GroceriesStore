@extends('Site/layout')

@section('title', "Home")

@section('content_header')
    
@stop

@section('content')


@include('Site/carousel')

@include('Site/topBrands')

@include('Site/banner')

@include('Site/offers')

@include('Site/aboutUs')


@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script> </script>
@stop