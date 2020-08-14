    <form id="presentations">
        <br>
        <label>Presentación</label>
        <input class="form-control input-lg" id="present" name="name" type="text">
        <br>
        <label>Precio</label>
        <div class="input-group">
        <span class="input-group-addon">$</span>
            <input type="text" placeholder="00.00" id="precio" class="form-control">
        </div>
        <br>
        <label>Precio promo</label>
        <div class="input-group">
        <span class="input-group-addon">$</span>
            <input type="text" placeholder="00.00" id="precioPromo" class="form-control">
        </div>
        <br>
        <div class="checkbox">
            <label>
            <input id="is_offer" type="checkbox"> Oferta
            </label>
        </div>
        <br>
        <div class="checkbox">
            <label>
            <input id="is_highlighted" type="checkbox"> Destacado
            </label>
        </div>
        <br>
        <button onclick="addPres();" type="button" class="btn btn-warning">Agregar +</button>
        <button onclick="$('#totalForm').show(); $('#boxPresentations').hide();" type="button" class="btn btn-primary">Volver</button>
        <br>
        <hr>
        <div id="presentationsAdded" style="display:none;" class="box">        
            <div class="box-header with-border">
                <h3 class="box-title">Presentations</h3><div><span class="badge bg-green"></span></div>
            </div>
            <!-- /.box-header -->
            <div id="content" class="box-body"></div>           
        </div>
    </form>
<script>

    function addPres(){

        renderPres();
        window.setTimeout(function () {
                    $('form.presentations').reset();
                  }, 1000);
    }

    renderPres(){
        let html += <ol>
                        <li>Presentación = "$('#present').val()", Precio = "$('#precio').val()", Precio Promo = "$('#precioPromo').val()", 
                        Es oferta = "$('#is_offer').val()", Es destacado = "$('#is_highlighted').val()"<a href="#" onclick="delete();"><span class="badge bg-red">Eliminar</span></a></li>
                    </ol>
    }

</script>