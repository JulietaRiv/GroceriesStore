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
            <form id="prodForm" method="post" action="" name="prodForm" role="form">
            @csrf
                <label>Nombre</label>
                <input class="form-control input-lg" name="name" type="text">
                <br>
                <div class="form-group">
                  <label>Categoría</label>
                  <select class="form-control">
                    <option>Seleccionar</option>
                    <option>option 1</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Marca</label>
                  <select class="form-control">
                    <option>Seleccionar</option>
                    <option>option 1</option>
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <input type="file" id="exampleInputFile">
                </div>
                <label>Descripción</label>
                <input class="form-control input-lg" name="name" type="text">
                <br>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Presentación única
                  </label>
                </div>
                <br>
                <label>Precio</label>
                <div class="input-group">
                <span class="input-group-addon">$</span>
                    <input type="text" placeholder="00.00" class="form-control">
                </div>
                <br>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Oferta
                  </label>
                </div>
                <br>
                <label>Precio promo</label>
                <div class="input-group">
                <span class="input-group-addon">$</span>
                    <input type="text" placeholder="00.00" class="form-control">
                </div>
                <br>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Destacado
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Sin Tacc
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Orgánico
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Agroecológico
                  </label>
                </div>
                <br>
                <button onclick="$('#prodForm').submit();" type="submit" class="btn btn-success">Guardar</button>
                <br>
                <br>
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