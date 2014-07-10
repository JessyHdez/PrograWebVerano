<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  


    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Revista</h2>
          <form id="accountForm" method="post" class="form-horizontal">
            <div class="tab-content">
                <div class="tab-pane active" id="info-tab">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nombre</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="nombre" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Portada</label>
                        <div class="col-lg-5">
                            <input type="file" class="form-control" name="portada" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Volumen</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="volumen" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Titulo</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="titulo" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Subtitulo</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="subtitulo" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Numero</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="numero" />
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Clave</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="clave" />
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Directorio</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="directorio" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Editorial</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="editorial" />
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Id_estatus</label>
                        <div class="col-lg-5">
                            <select class="form-control" name="status">
                                <option value="">Seleccionar</option>
                                <option value="FR">1</option>
                                <option value="DE">2</option>
                                <option value="IT">3</option>
                                <option value="JP">4</option>
                                <option value="RU">5</option>
                                <option value="US">6</option>
                                <option value="GB">7</option>
                                <option value="other">Otro</option>
                            </select>
                        </div>
                    </div>                                                                                                 
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-5 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary">Validate</button>
                </div>
            </div>
        </form>
    
        </div>

      </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    
    
    <script>
      $(document).ready(function() {
          $('#accountForm').bootstrapValidator({
                  // Only disabled elements are excluded
                  // The invisible elements belonging to inactive tabs must be validated
                  excluded: [':disabled'],
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },
                  fields: {
                      status: {
                          validators: {
                              notEmpty: {
                                  message: 'Id requerido'
                              }
                          }
                      },                    
                      editorial: {
                          validators: {
                              notEmpty: {
                                  message: 'Editorial requerido'
                              }
                          }
                      },                    
                      directorio: {
                          validators: {
                              notEmpty: {
                                  message: 'Directorio requerido'
                              }
                          }
                      },                    
                      clave: {
                          validators: {
                              notEmpty: {
                                  message: 'Clave requerida'
                              }
                          }
                      },                    
                      numero: {
                          validators: {
                              notEmpty: {
                                  message: 'Numero requerido'
                              }
                          }
                      },                    
                      subtitulo: {
                          validators: {
                              notEmpty: {
                                  message: 'Subtitulo requerido'
                              }
                          }
                      },                    
                      nombre: {
                          validators: {
                              notEmpty: {
                                  message: 'Nombre requerido'
                              }
                          }
                      },
                      portada: {
                          validators: {
                              notEmpty: {
                                  message: 'Portada requerida'
                              }
                          }
                      },
                      volumen: {
                          validators: {
                              notEmpty: {
                                  message: 'Volumen requerido'
                              }
                          }
                      },
                      titulo: {
                          validators: {
                              notEmpty: {
                                  message: 'Titulo requerido'
                              }
                          }
                      }

                  }
              });
      });
      </script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

  </body>
</html>