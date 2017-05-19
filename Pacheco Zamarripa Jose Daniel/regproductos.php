<div id="page-content-wrapper" class="">
        <div class="page-content inset">
            <div class="row">
                <div class="jumbotron" style="background-color: rgba(131,175,155,0.6);">
                    <div class="row">
        <div class="container">
            <p class="text"><h1 style="text-align: center; font-family:Gabriola; text-shadow: 3px 2px gray" ><em>Registrar Productos</em></h1></p>
            <form>
            <div class="row" style="padding-top:30px;">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-left" style="padding-left: 30px;">
                    <label><h3><strong>Nombre del Producto:</strong></h3></label><br>
                    <input class="form-control input-lg" placeholder="Nombre del Producto" id="txtproducto" type="text" maxlength="30">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-left" style="padding-left: 30px;">
                    <label><h3><strong>Precio</strong></h3></label><br>
                    <input class="form-control input-lg" placeholder="Precio" id="txtprecio" type="text" maxlength="50">
                </div>
            </div>
            <div class="row" style="padding-top: 30px;">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-left" style="padding-left: 30px;">
                    <label><h3><strong>Cantidad de Personas</strong></h3></label><br>
                    <input class="form-control input-lg" placeholder="Cantidad" id="txtcantidad" type="text" maxlength="10">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-left" style="padding-left: 30px;">
                    <label><h3><strong>Tipo Pastel</strong></h3></label><br>
                    <select class="form-control select-lg" id="txttipo">
                        <option value="1">cumpleaños</option>
                        <option value="2">aniversario</option>
                        <option value="3">graduación</option>
                        <option value="4">san valentin</option>

                    </select>
                </div>
            </div>

            <div class="row" style="padding-top: 30px;">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-left" style="padding-left: 30px;">
                    <label><h3><strong>Sabor</strong></h3></label><br>
                    <select class="form-control select-lg" id="txtreceta">
                        <option value="1">chocolate</option>
                        <option value="2">secreta</option>
                        <option value="3">vainilla</option>

                    </select>
                </div>
            </div>
            <div class="row text-center" style="padding-top: 50px;">
                <br>
                <button style="color:white; background-color: rgb(34,34,34); border-color: gray;" onclick="capturardatosproductos()">
                    <span class="btn btn-lg"></span>
                    Registrar Producto
                </button>
            </div>  
            </form>
            </div> 
            </div>
            </div> 
            </div>
            </div>       
</div>