<?php  

      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Estadio.php'); //terminar estos archivos en modelo
      include ('../../controllers/EstadioController.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php');


  if (isset($_POST['Nombre'])) {
    //echo "<pre>"; //Etiqueta pre muestra los espacios 
   // print_r($_POST);
  //  echo "</pre>";
    $estadioC = new EstadioController();
    $estadioC->insertaEstadio($_POST);
  }
?>

    <div class="row">
      <div class="col-md-10">
        <h4>Registro Estadio</h4>
        <form id="formregistro" method="POST" class="form-horizontal">
            <!--SI EL NAME=Nombre CON MAYUSCULA NO VALIDA-->
          <div class="form-group">
            <label class="col-lg-3 control-label" for="Nombre">Nombre</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="Nombre" id="Nombre"/>
            </div>
          </div>

          <!--div class="form-group">
            <label class="col-lg-3 control-label" for="idciudad">Id_ciudad</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="idciudad" id="idciudad" />
            </div>
          </div-->
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