@extends('adminlte::page')

@section('title', "Products")

@section('content_header')
   
@stop

@section('content')

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Producto {{ $product->name }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nombre</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>          
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop