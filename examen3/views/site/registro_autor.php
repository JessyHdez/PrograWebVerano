<?php 


  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php');
  include ('../../controllers/AutorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
  if (isset($_POST['nombre'])) {
    $autorC = new AutorController();
    $autorC->insertaAutor($_POST);
  }
?>



    <div class="row">
      <div class="col-md-10">
        <h4>Registro Autor:</h4>

        <form id="formregistro" method="POST" class="form-horizontal">
          
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre:</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="nombre" id="nombre"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="apellidos">Apellidos:</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="apellidos" id="apellidos"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="email">Email:</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="email" id="email"/>
            </div>
          </div>

          <input type="submit" name="Guardar" value="Guardar" />

        </form>  

      </div>
    </div>

<?php include ('../layouts/footer.php'); ?>