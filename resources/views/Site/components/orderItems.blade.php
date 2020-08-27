

    <div class="products-right-grid">
        <div class="products-right-grids">
            <div class="sorting">
                <select id="country" onchange="changeOrder(this.value)" class="frm-field required sect">
                    <option @if ($order == "price,asc") selected @endif value="price,asc">Ordenar por menor precio</option>
                    <option @if ($order == "price,desc") selected @endif value="price,desc">Ordenar por mayor precio</option>
                    <option @if ($order == "name,asc") selected @endif value="name,asc">Ordenar por A-Z</option>
                    <option @if ($order == "name,desc") selected @endif value="name,desc">Ordenar por Z-A</option>
                </select>
            </div>
            <div class="sorting-left">
                <select id="country1" onchange="changeItemspp(this.value)" class="frm-field required sect">    

                @php
                $cols = ( $colmd == 3 ) ? 4 : 3 ;
                @endphp
                @for ($i = 1; $i <= 4; $i++)
                
                @php
                $val = $i * 3;
                @endphp

                    <option @if ($items == $val) selected @endif value="{{$val}}">Items por página {{$val * $cols}}</option>
                  
                @endfor
                </select>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>    
    
<script>

 function changeOrder(order)
{
    location.href="?order="+order;
}

 function changeItemspp(items)
 {
    location.href="?items="+items;
 }

</script>   