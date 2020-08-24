@extends('adminlte::page')

@section('title', "Productos")

@section('content_header')
    
@stop

@section('content')

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Editar producto</h3>
    </div>
        <div class="box-body">
            <form  role="form">
                <input type="hidden" name="_token" value="">      
                @csrf            
                <label>Nombre</label>
                <input id="productName" class="form-control input-lg" value="{{ old('name') }}" name="name" type="text">
                <br>
                <div class="form-group">
                  <label>Categoría</label>
                  <select name="category_id" class="form-control">
                  @foreach ( $categories as $category )         
                    <option @if ( $category->id == '' ) value="{{$category->id}}" style="display:none;" @else selected @endif>{{ $category->name }}</option>      
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Marca</label>
                  <select name="brand_id" class="form-control">
                    @foreach ( $brands as $brand )
                    <option @if ( $brand->id == '' ) value="{{$brand->id}}" style="display:none;" @else selected @endif>{{ $brand->name }}</option>
                    <option value="{{$brand->id}}">{{ $brand->name }}</option>
                    @endforeach
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label for="InputFile">Foto</label>
                  <input id="photo" name="photo" type="file" value="">
                </div>
                <label>Descripción</label>
                <input id="editDescription" name="editDescription" class="form-control input-lg" type="text" value="">
                <br>
                <div class="checkbox">
                  <label>
                    <input id="editCeliacs" name="editCeliacs" type="checkbox" @if ( $product->celiacs == 1 ) value= 1 @endif> Sin Tacc
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="editOrganic" name="editOrganic" type="checkbox" @if ( $product->organic == 1 ) value= 1 @endif> Orgánico
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="editAgroecological" name="editAgroecological" type="checkbox" @if ( $product->agroecological == 1 ) value= 1 @endif> Agroecológico
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="editVegan" name="editVegan" type="checkbox" @if ( $product->vegan == 1 ) value= 1 @endif> Vegano
                  </label>
                </div>
                <br>
                <button onclick="presentationEditForm()" id="cargarEditPres" name="cargarEditPres"  type="button" class="btn btn-primary">Cargar presentaciones</button>
                <br>
                <hr>
                <div id="presentationsAdded" class="box">        
                  <div class="box-header with-border">
                    <h3 class="box-title">Presentaciones</h3><div><span class="badge bg-green"></span></div>
                    <br>
                  </div>
                  <div id="presentationEditContent" class="box-body"></div>           
                </div>
                <br>
                <button onclick="$('#prodForm').submit();" type="submit" class="btn btn-success">Guardar</button>
                <br>
                <input type="hidden" id="editPresentations" name="editPresentations" value=""/>      
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