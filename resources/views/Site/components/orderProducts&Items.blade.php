

    <div class="products-right-grid">
        <div class="products-right-grids">
            <div class="sorting">
                <select id="country" onchange="changeOrder(this.value)" class="frm-field required sect">
                    <option selected value="precio_desc">Ordenar por menor precio</option>
                    <option value="precio_asc">Ordenar por mayor precio</option>
                    <option value="alf_a">Ordenar por A-Z</option>
                </select>
            </div>
            <div class="sorting-left">
                <select id="country1" onchange="changeItemspp(this.value)" class="frm-field required sect">
                    <option value="">Items por página 9</option>
                    <option value="">Items por página 18</option> 
                    <option value="">Items por página 32</option>					
                    <option value="">Todo</option>								
                </select>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>    
    
<script>

    changeOrder($param)
		{
			location.href="/orderProduct/{$param}";
		}

</script>   