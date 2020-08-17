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
                <input id="productName" class="form-control input-lg" value="{{ old('name') }}" name="name" type="text">
                <br>
                <div class="form-group">
                  <label>Categoría</label>
                  <select id="category_id" name="category_id" class="form-control">
                    <option @if ( old('category_id') == '') selected @else style="display:none;" @endif>Seleccionar</option>        
                  @foreach ( $categories as $category )         
                    <option @if ( old('category_id') == '') value="{{old('category_id')}}" style="display:none;" @else selected @endif>{{ $category->name }}</option>      
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Marca</label>
                  <select id="barnd_id" name="brand_id" class="form-control">
                  <option @if ( old('brand_id') == '') selected @else style="display:none;" @endif>Seleccionar</option>
                  @foreach ( $brands as $brand )
                  <option @if ( old('brand_id') == '') value="{{old('brand_id')}}" style="display:none;" @else selected @endif>{{ $brand->name }}</option>
                    <option value="{{$brand->id}}">{{ $brand->name }}</option>
                  @endforeach
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label for="InputFile">Foto</label>
                  <input id="photo" name="photo" type="file" value="{{ old('photo') }}">
                </div>
                <label>Descripción</label>
                <input id="description" name="description" class="form-control input-lg" type="text" value="{{ old('description') }}">
                <br>
                <div class="checkbox">
                  <label>
                    <input id="for_celiacs" name="for_celiacs" type="checkbox" value="{{ old('for_celiacs') }}"> Sin Tacc
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="organic" name="organic" type="checkbox" value="{{ old('organic') }}"> Orgánico
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="agroecological" name="agroecological" type="checkbox" value="{{ old('agroecological') }}"> Agroecológico
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="vegan" name="vegan" type="checkbox" value="{{ old('vegan') }}"> Vegano
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="offer" name="offer" type="checkbox" value="{{ old('offer') }}"> Oferta              
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="highlighted" name="highlighted" type="checkbox" value="{{ old('highlighted') }}"> highlighted
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