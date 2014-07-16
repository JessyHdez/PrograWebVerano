<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Articulo.php');
  include ('../../controllers/ArticuloController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
  if (isset($_POST['nombre'])) {
    $articuloC = new ArticuloController();
    $articuloC->insertaArticulo($_POST);
  }
?>



    <div class="row">
      <div class="col-md-10">
        <h4>Registro Art&iacute;culo:</h4>

        <form id="formregistro" method="POST" class="form-horizontal">
          
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="nombre" id="nombre"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="resumen">Resumen:</label>
            <div class="col-lg-3">
                <textarea type="text" class="form-control" name="resumen" id="resumen"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="abstract">Abstract:</label>
            <div class="col-lg-3">
                <textarea type="text" class="form-control" name="abstract" id="abstract"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="introduccion">Introducci&oacute;n:</label>
            <div class="col-lg-3">
                <textarea type="text" class="form-control" name="introduccion" id="introduccion"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="metodologia">Metodolog&iacute;a:</label>
            <div class="col-lg-3">
                <textarea type="text" class="form-control" name="metodologia" id="metodologia"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="contenido">Contenido:</label>
            <div class="col-lg-3">
                <textarea type="text" class="form-control" name="contenido" id="contenido"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="fecha_creacion">Fecha de Creaci&oacute;n:</label>
            <div class="row">
              <div class="col-lg-3">
                <div class='input-group date' id='fechaarti'>
                    <input type="text" class="form-control" name="fecha_creacion" id="fecha_creacion"/>
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
                  <span class="help-block">Formato sugerido para este campo:MM/DD/YYYY h:m </span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="archivo_pdf">Archivo PDF:</label>
            <div class="col-lg-5">
                <input type="file" class="form-control" name="archivo_pdf" id="archivo_pdf"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="conclusiones">Conclusiones:</label>
            <div class="col-lg-3">
                <textarea type="text" class="form-control" name="conclusiones" id="conclusiones"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="agradecimientos">Agradecimietnos:</label>
            <div class="col-lg-3">
                <textarea type="text" class="form-control" name="agradecimientos" id="agradecimientos"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="referencias">Referencias:</label>
            <div class="col-lg-3">
                <textarea type="text" class="form-control" name="referencias" id="referencias"></textarea>
            </div>
          </div>
            <input type="submit" name="Guardar" value="Guardar" />
          </div>
          
        </form>  

      </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>