        <div class="box-body no-padding">
            <table class="table table-condensed">
                <tbody>
                    <tr>
                    <th>Nombre</th>
                        <th>Presentación</th>
                        <th>Stock</th>
                        <th>Estado</th>
                    </tr>
                    @if ( $products != '' )
                    @foreach ( $products as $product )                
                    @foreach ( $product->presentations as $productPresentation )
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $productPresentation['presentation'] }}</td>
                        <td>{{ $productPresentation['stock'] }}</td>
                        <td>@if ($productPresentation['stock'] <= 3)<span class="badge bg-red">- 3</span>@endif
                        @if ($productPresentation['stock'] > 3 & $productPresentation['stock'] < 10) <span class="badge bg-yellow">5 - 10</span>@endif
                        @if ($productPresentation['stock'] >= 10) <span class="badge bg-green">+ 10</span>@endif</td>
                        @endforeach
                    @endforeach
                    @endif
                    </tr>
                </tbody>
            </table>
        </div>