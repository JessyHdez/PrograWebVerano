<?php include ('../views/layouts/header.php'); ?>

    <div class="row">
      <div class="col-md-10">
        <h4>Registro Revista</h4>
        <form id="formregistro" method="post" class="form-horizontal">
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="nombre" id="nombre" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="abreviatura">Abreviatura</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="abreviatura" id="abreviatura"/>
            </div>
          </div>

        </form>  

      </div>
    </div>
  
</div>


<?php include ('../views/layouts/footer.php'); ?>