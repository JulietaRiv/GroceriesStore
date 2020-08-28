@extends('adminlte::page')

@section('title', "Productos")

@section('content_header')
 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="/admin/js/products_presentations.js"></script>
@stop

@section('content')

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Nuevo producto</h3>
    </div>
    <br>
        <div class="box-body">
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <p>Corrige los siguientes errores:</p>
              <ul>
                  @foreach ($errors->all() as $message)
                      <li>{{ $message }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
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
                  <option @if ( old('brand_id') == '') value="" style="display:none;" @else selected @endif>{{ $brand->name }}</option>
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
                    <input id="celiacs" name="celiacs" type="checkbox" value="1"> Sin Tacc
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="organic" name="organic" type="checkbox" value="1"> Orgánico
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="agroecological" name="agroecological" type="checkbox" value="1"> Agroecológico
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="vegan" name="vegan" type="checkbox" value="1"> Vegano
                  </label>
                </div>
                <br>
                <button onclick="presentationForm()" id="cargarPres" name="cargarPres"  type="button" class="btn btn-primary">Cargar presentaciones</button>
                <br>
                <hr>
                <div id="presentationsAdded" class="box">        
                  <div class="box-header with-border">
                    <h3 class="box-title">Presentaciones</h3><div><span class="badge bg-green"></span></div>
                    <br>
                  </div>
                  <div id="presentationContent" class="box-body"></div>           
                </div>
                <br>
                <button onclick="$('#prodForm').submit();" type="submit" class="btn btn-success">Guardar</button>
                <br>
            </div>
            <br>       
        </div>
        <input type="hidden" id="presentations" name="presentations" value="">
        </form>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')


<script>
@if (old('presentations') != '')
let presentations = {!!old('presentations')!!};
@else 
let presentations = [];
@endif


  function presentationForm () {
    event.preventDefault();
    Swal.fire({
      title: "<i style='font-size:25px;'>Presentaciones del producto</i>", 
      html: presentationsForm,  
      confirmButtonText: "Agregar +", 
      closeOnConfirm: false,
    }).then((result) => {
      if (result.value == true){
        addPres();
      };
    });
};



</script>

@stop