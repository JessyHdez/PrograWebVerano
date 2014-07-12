<?php  

      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Equipo.php'); //terminar estos archivos en modelo
      include ('../../controllers/EquipoController.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php');


  if (isset($_POST['nombre'])) {
    echo "<pre>"; //Etiqueta pre muestra los espacios 
    print_r($_POST);
    echo "</pre>";
    # code...
  }
?>

    <div class="row">
      <div class="col-md-10">
        <h4>Registro Equipo</h4>
        <form id="formregistro" method="POST" class="form-horizontal">
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="nombre" id="nombre"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="idpais">Id_pais</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="idpais" id="idpais" />
            </div>
          </div>

          <div class="form-group">
              <label class="col-lg-3 control-label" for="escudo">escudo</label>
              <div class="col-lg-4">
                  <input type="file" class="form-control" name="escudo" id="escudo"/>
              </div>
          </div>
          <input type="submit" name="Guardar" value="Guardar" />
        </form>


        

        <!--style type="text/css">
        /* Override feedback icon position */
        .form-horizontal .has-feedback .input-group .form-control-feedback {
            top: 0;
            right: -30px;
        }
        </style>

        <form id="fechaform" class="form-horizontal">
            <div class="form-group">
                <label class="col-lg-3 control-label">Fecha:</label>
                <div class="col-lg-4">
                    <div class="input-group date" id="fecha">
                        <input type="text" class="form-control" name="meeting" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <span class="help-block">MM/DD/YYYY h:m A</span>
                </div>
            </div>
        </form-->

      </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>