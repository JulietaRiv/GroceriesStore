@extends('adminlte::page')

@section('title', "Products")

@section('content_header')
   
@stop

@section('content')

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Nuevo producto</h3>
    </div>
    <br>
        <div class="box-body">
          <button onclick="$('#totalForm').hide(); $('#boxPresentations').show();" type="button" class="btn btn-primary">Cargar presentaciones</button>
            <br>
            <div style="display:none;" id="boxPresentations">
            @include('Admin/products/Presentations')
            </div>  
            <br>
            <div id="totalForm">
            <form id="prodForm" method="post" action="{{route('productsStore')}}" name="prodForm" role="form">
            @csrf            
                <label>Nombre</label>
                <input class="form-control input-lg" name="name" type="text">
                <br>
                <div class="form-group">
                  <label>Categoría</label>
                  <select name="category_id" class="form-control">
                    <option selected>Seleccionar</option>
                  @foreach ( $categories as $category )               
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Marca</label>
                  <select name="brand_id" class="form-control">
                    <option selected>Seleccionar</option>
                  @foreach ( $brands as $brand )
                    <option value="{{$brand->id}}">{{ $brand->name }}</option>
                  @endforeach
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <input name="photo" type="file" id="exampleInputFile">
                </div>
                <label>Descripción</label>
                <input class="form-control input-lg" name="description" type="text">
                <br>
                <div class="checkbox">
                  <label>
                    <input name="for_celiacs" type="checkbox"> Sin Tacc
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input name="organic" type="checkbox"> Orgánico
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input name="agroecological" type="checkbox"> Agroecológico
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input name="vegan" type="checkbox"> Vegano
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input name="offer" type="checkbox"> Oferta
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input name="highlighted" type="checkbox"> highlighted
                  </label>
                </div>  
                <br>            
                <button onclick="$('#prodForm').submit();" type="submit" class="btn btn-success">Guardar</button>
                <br>
            </div>
            <br>       
        </div>
        </form>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop