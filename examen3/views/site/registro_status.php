<?php 


  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Status.php');
  include ('../../controllers/StatusController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
  if (isset($_POST['status'])) {
    $statusC = new StatusController();
    $statusC->insertaStatus($_POST);
  }
?>



    <div class="row">
      <div class="col-md-10">
        <h4>Registro Status:</h4>
        <form id="formregistro" method="POST" class="form-horizontal">
          <div class="form-group">
            <label class="col-lg-3 control-label" for="status">Status:</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="status" id="status"/>
            </div>
          </div>
          <input type="submit" name="Guardar" value="Guardar" />
        </form>  

      </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>