<?php include ('../layouts/header.php'); ?>

    <div class="row">
      <div class="col-md-10">
        <h4>Registro Revista</h4>
        <form id="formregistro" method="post" class="form-horizontal">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="nombre" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">volumen</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="volumen" />
            </div>
          </div>

          <div class="form-group">
              <label class="col-lg-3 control-label">titulo</label>
              <div class="col-lg-5">
                  <input type="text" class="form-control" name="titulo" />
              </div>
          </div>

          <div class="form-group">
              <label class="col-lg-3 control-label">subtitulo</label>
              <div class="col-lg-5">
                  <input type="text" class="form-control" name="subtitulo" />
              </div>
          </div>

          <div class="form-group">
              <label class="col-lg-3 control-label">clave</label>
              <div class="col-lg-5">
                  <input type="text" class="form-control" name="clave" />
              </div>
          </div>

        </form>  

        <form id="seleccionarch" class="form-horizontal" enctype="multipart/form-data">
          <div class="form-group">
              <label class="col-lg-3 control-label">Portada</label>
              <div class="col-lg-4">
                  <input type="file" class="form-control" name="portada" />
              </div>
          </div>

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