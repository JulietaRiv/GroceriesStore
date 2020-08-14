    <form id="presentationsForm">
        <br>
        <label>Presentación</label>
        <input class="form-control input-lg" id="presentation" name="presentation" type="text">
        <br>
        <label>Precio</label>
        <div class="input-group">
        <span class="input-group-addon">$</span>
            <input type="number" placeholder="00.00" name="price" id="price" class="form-control">
        </div>
        <br>
        <label>Precio promo</label>
        <div class="input-group">
        <span class="input-group-addon">$</span>
            <input type="number" placeholder="00.00" name="promo_price" id="promo_price" class="form-control">
        </div>
        <br>
        <div class="checkbox">
            <label>
            <input name="offer" id="offer" type="checkbox"> Oferta
            </label>
        </div>
        <br>
        <div class="checkbox">
            <label>
            <input name="highlighted" id="highlighted" type="checkbox"> Destacado
            </label>
        </div>
        <label>Stock</label>
        <div class="input-group">
        <span class="input-group-addon"></span>
            <input type="number" placeholder="00" id="stock" id="stock" class="form-control">
        </div>
        <input type="hidden" id="presNum" name="presNum" value="">
        <br>
        <button onclick="addPres()" type="button" class="btn btn-warning">Agregar +</button>
        <button onclick="$('#totalForm').show(); $('#boxPresentations').hide();" type="button" class="btn btn-primary">Volver</button>
        <br>
        <hr>
        <div id="presentationsAdded" style="display:none;" class="box">        
            <div class="box-header with-border">
                <h3 class="box-title">Presentaciones</h3><div><span class="badge bg-green"></span></div>
                <br>
            </div>
            <div id="presentationContent" class="box-body"></div>           
        </div>
    </form>

<script>

    let presentations = [];   

    function addPres(){         
        let presentation = {
            'presentation': $('#presentation').val(), 
            'price': $('#price').val(), 
            'promo_price': $('#promo_price').val(), 
            'offer': $('#offer').is(':checked'), 
            'highlighted': $('#highlighted').is(':checked')
            'stock': $('#stock').val(), 
        };      
        if ($('#presNum').val() !== ''){
            presentations[$('#presNum').val()] = presentation;
        } else {
            presentations.push(presentation);
        }
        $("#presentationsAdded").show();
        renderPres();
        $('#presentationsForm')[0].reset()
    }

    function renderPres(){    
        let html = '';
        if (presentations.length > 0){
            html = `
<table border='1' style='width:90%';>
    <thead>
        <tr>
            <th>Presentación</th>
            <th>Precio</th>
            <th>Precio Promo</th>
            <th>Es oferta</th>
            <th>Es destacado</th>
            <th>Stock</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>`;
            presentations.forEach(function(presentation, i){
                let offer = presentation.offer == true ? 'Si' : 'No';
                let highlighted = presentation.highlighted == true ? 'Si' : 'No';
                html += `
<tr>
    <td>${ presentation.presentation }</td>
    <td>${ presentation.price }</td>
    <td>${ presentation.promo_price }</td>
    <td>${ offer }</td>
    <td>${ highlighted  }</td>
    <td>${ presentation.stock  }</td>
    <td style='width:10%;'><a href='#' onclick='deletePres(${ i });'><span class='badge bg-red'>Eliminar</span></a>
                           <a href='#' onclick='editPres(${ i });'><span class='badge bg-green'>Editar</span></a></td>
</tr>`;  
            });
            html += "</tbody></table>";
        } else {
            html = 'Aun no hay presentaciones cargadas';
        }
        $("#presentationContent").html(html);
    }

    function deletePres(param){
        presentations.splice(param, 1);
        renderPres();
    }

    function editPres(param){
        $('#presentation').val(presentations[param].presentation);
        $('#price').val(presentations[param].price);
        $('#promo_price').val(presentations[param].promo_price);
        $('#offer')[0].checked = presentations[param].offer;
        $('#highlighted')[0].checked = presentations[param].highlighted;
        $('#stock').val(presentations[param].stock);
        $('#presNum').val(param);
    }

</script>