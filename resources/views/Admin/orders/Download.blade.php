
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalle del pedido n° {{$order->id}}</h3>
                </div>
                <br>
                <h4 style="display:inline-block;">Estado: <span style="color:red;">{{ $order->status }}</span></h4>
                <hr>
                <br>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Nombre: {{ $order->name }} </td>
                                <td>    &nbsp Dirección: {{ $order->address }} </td>
                            </tr>
                            <tr>
                                <td>Tel: {{ $order->cel }} </td>
                                <td>    &nbsp Método de pago: {{ $order->payment_method }} </td>
                            </tr>
                            <tr>
                                <td>Fecha: {{ $order->created_at }} </td>
                                <td>    &nbsp Comentario: {{ $order->comment }} </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <hr>
                    <br>
                    <table class="table-bordered">
                        <thead style="text-align:center;">
                            <tr>
                                <th style="text-align:left;">    &nbsp Items</th>
                                <th>    &nbsp Unidades</th>
                                <th>    &nbsp Precio por unidad</th>
                                <th>    &nbsp Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $total = 0;
                            $unidades = 0;
                            @endphp
                            @foreach ( $order->items as $item )
                            @php
                            $total += $item['price'];
                            $unidades += $item['quantity'];
                            @endphp
                            <tr>
                                <td>    &nbsp{{ $item['name'] }}</td>
                                <td style="text-align:center;">    &nbsp {{ $item['quantity'] }}</td>
                                <td style="text-align:center;">    &nbsp ${{ $item['unit_price'] }}</td>
                                <td style="text-align:center;">    &nbsp ${{ $item['price'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>    &nbsp Precio final</td>
                                <td style="text-align:center;">    &nbsp {{ $unidades }}</td>
                                <td></td>
                                <td style="text-align:center; font-weight:bold;">    &nbsp ${{ $total }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
