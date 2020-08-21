@extends('adminlte::page')

@section('title', "Products")

@section('content_header')

<script src="/admin/js/products_presentations.js"></script>

@stop

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Destacados</h3>
        <br>
        <button onclick="location.href='/admin/products/highlightedSelected/'+orderProducts" class="btn btn-success">Aplicar</button>
    </div>
    <br>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-condensed">
                <tbody>
                    <tr>
                        <th style="width:5">Orden</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Presentación destacada</th>
                    </tr>
                    @foreach ( $highlightedProducts as $highProduct )
                    <tr>
                        <td style="width:5"><input type="checkbox" onclick="selectProduct(this)" value="{{$highProduct->id}}" name="order"/><span id="orderNum{{$highProduct->id}}"></span></td>
                        <td>{{ $highProduct->name }}</td>
                        <td>{{ $highProduct->category->name }}</td>
                        <td>{{ $highProduct->brand->name }}</td>
                        <td>{{ $highProduct->price }}</td>
                        <td>
                        @if ( $highProduct->presentations == null )
                        {{ $highProduct->id }}
                        @else
                        @foreach ( $highProduct->presentations as $highPresentation )
                        @if ($highPresentation['highlighted'] == 1){{$highPresentation['presentation']}}@endif
                        @endforeach
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
</div>

@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')

<script>


let orderProducts = [];

function selectProduct(e)
{
    let num = 0;
    if (e.checked){
        if (orderProducts.length > 2){
            alert('máximo 3');
            event.preventDefault();
        } else {
            orderProducts.push(e.value);
            orderProducts.forEach(function(a, i){
                $("#orderNum" + a).html(i + 1);
            });           
        }
    } else {
        orderProducts = orderProducts.filter(elem => elem != e.value);
        $("#orderNum" + e.value).html('');
        orderProducts.forEach(function(a, i){
                $("#orderNum" + a).html(i + 1);
            });
    }  
} 
</script>

@stop