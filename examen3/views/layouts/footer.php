<nav class="navbar navbar-default" role="navigation"  >


   <div class="row">
    
    <div class="col-md-12">
      <hr>
      <p class="text-center">
        
        Clase programación web. <br><span class="glyphicon glyphicon-registration-mark"> </span> <?php echo date('Y'); ?>
        
      </p>
    </div>  
    
   </div>

 </div> <!-- /container -->    
 </nav>
 
  <script>
      $(document).ready(function() {
          $('#formregistro').bootstrapValidator({
                  // Only disabled elements are excluded
                  // The invisible elements belonging to inactive tabs must be validated
                  excluded: [':disabled'],
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },
                  fields: {
                      nombre: {
                          validators: {
                              notEmpty: {
                                  message: 'El nombre es requerido.'
                              }
                          }
                      },
                      status: {
                          validators: {
                              notEmpty: {
                                  message: 'El status es requerido.'
                              }
                          }
                      },
                      apellidos: {
                          validators: {
                              notEmpty: {
                                  message: 'Los apellidos son requeridos.'
                              }
                          }
                      },
                      email: {
                          validators: {
                              notEmpty: {
                                  message: 'El email es requerido.'
                              }
                          }
                      },
                      portada: {
                          validators: {
                              notEmpty: {
                                  message: 'La portada es requerida'
                              }
                          }
                      },
                      fecha: {
                          validators: {
                              notEmpty: {
                                  message: 'La fecha es requerida.'
                              }
                          }
                      },
                      volumen: {
                          validators: {
                              notEmpty: {
                                  message: 'El volumen es requerido.'
                              }
                          }
                      },
                      titulo: {
                          validators: {
                              notEmpty: {
                                  message: 'El titulo es requerido.'
                              }
                          }
                      },
                      subtitulo: {
                          validators: {
                              notEmpty: {
                                  message: 'El subtitulo es requerido.'
                              }
                          }
                      }, 
                      clave: {
                          validators: {
                              notEmpty: {
                                  message: 'La clave es requerida.'
                              }
                          }
                      }, 
                      directorio: {
                          validators: {
                              notEmpty: {
                                  message: 'El directorio es requerido.'
                              }
                          }
                      }, 
                      
                      editorial: {
                          validators: {
                              notEmpty: {
                                  message: 'La editorial es requerido.'
                              }
                          }
                      }, 
                       numero: {
                        validators: {
                            notEmpty: {
                                message: 'El numero es requerido'
                            }
                        }
                    },

                    resumen: {
                        validators: {
                            notEmpty: {
                                message: 'El resumen es requerido'
                            }
                        }
                    },

                  abstract: {
                        validators: {
                            notEmpty: {
                                message: 'El abstract es requerido'
                            }
                        }
                    },
                  introduccion: {
                          validators: {
                              notEmpty: {
                                  message: 'La introduccion es requerida.'
                              }
                          }
                      },  
                  metodologia: {
                          validators: {
                              notEmpty: {
                                  message: 'La metodologia es requerida.'
                              }
                          }
                      }, 
                  contenido: {
                          validators: {
                              notEmpty: {
                                  message: 'El contenido es requerido.'
                              }
                          }
                      }, 
                  fecha_creacion: {
                          validators: {
                              notEmpty: {
                                  message: 'La fecha_creacion es requerida.'
                              }
                          }
                      },  
                  archivo_pdf: {
                          validators: {
                              notEmpty: {
                                  message: 'El archivo_pdf es requerido.'
                              }
                          }
                      }, 
                  conclusiones: {
                          validators: {
                              notEmpty: {
                                  message: 'Las conclusiones son requeridas.'
                              }
                          }
                      }, 
                  agradecimientos: {
                          validators: {
                              notEmpty: {
                                  message: 'Los agradecimientos son requeridos.'
                              }
                          }
                      }, 
                  referencias: {
                          validators: {
                              notEmpty: {
                                  message: 'Las referencias son requeridas.'
                              }
                          }
                      },                                                                                                                                  
                  }
              });
      });
      </script>

      <script>
  $(document).ready(function() {
      $('#fecha').datetimepicker();

      $('#fecha').bootstrapValidator({
          feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
              meeting: {
                  validators: {
                      date: {
                          format: 'DD/MM/YYYY h:m A',
                          message: 'The value is not a valid date'
                      }
                  }
              }
          }
      });
   </script>

   <script type="text/javascript">
            $(function () {
                $('#fecharev').datetimepicker({
                    pickTime: false
                });
            });
    </script>

    <script type="text/javascript">
            $(function () {
                $('#fechaarti').datetimepicker({
                    pickTime: false
                });
            });
        </script>

  <script>
   $(document).ready(function() {
      $('#fecharev').datetimepicker();

      $('#fecharev').bootstrapValidator({
          feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
              meeting: {
                  validators: {
                      date: {
                          format: 'DD/MM/YYYY h:m A',
                          message: 'The value is not a valid date'
                      }
                  }
              }
          }
      });

      });

   $('#datetimePicker')
          .on('dp.change dp.show', function(e) {
              // Validate the date when user change it
              $('#meetingForm')
                  // Get the bootstrapValidator instance
                  .data('bootstrapValidator')
                  // Mark the field as not validated, so it'll be re-validated when the user change date
                  .updateStatus('meeting', 'NOT_VALIDATED', null)
                  // Validate the field
                  .validateField('meeting');
          });
   </script>

  <script>
  $(document).ready(function() {
      $('#fechaform').datetimepicker();

      $('#fechaform').bootstrapValidator({
          feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
              meeting: {
                  validators: {
                      date: {
                          format: 'MM/DD/YYYY h:m A',
                          message: 'The value is not a valid date'
                      }
                  }
              }
          }
      });
    });

     

      $('#datetimePicker')
          .on('dp.change dp.show', function(e) {
              // Validate the date when user change it
              $('#meetingForm')
                  // Get the bootstrapValidator instance
                  .data('bootstrapValidator')
                  // Mark the field as not validated, so it'll be re-validated when the user change date
                  .updateStatus('meeting', 'NOT_VALIDATED', null)
                  // Validate the field
                  .validateField('meeting');
          });
 
  </script>

  <script>
  $(document).ready(function() {
      $('#fechaarti').datetimepicker();

      $('#fechaarti').bootstrapValidator({
          feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
              meeting: {
                  validators: {
                      date: {
                          format: 'MM/DD/YYYY h:m A',
                          message: 'The value is not a valid date'
                      }
                  }
              }
          }
      });
    });

     

      $('#datetimePicker')
          .on('dp.change dp.show', function(e) {
              // Validate the date when user change it
              $('#meetingForm')
                  // Get the bootstrapValidator instance
                  .data('bootstrapValidator')
                  // Mark the field as not validated, so it'll be re-validated when the user change date
                  .updateStatus('meeting', 'NOT_VALIDATED', null)
                  // Validate the field
                  .validateField('meeting');
          });
 
  </script>

  <script>
$(document).ready(function() {
    $('#ratyForm')
        .bootstrapValidator({
            // The disabled elements are excluded
            // Hidden elements (including the rating star) are included
            excluded: ':disabled',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                directorio: {
                    validators: {
                        notEmpty: {
                            message: 'El directorio es requerido'
                        }
                    }
                },
                    editorial: {
                    validators: {
                        notEmpty: {
                            message: 'La editorial es requerida'
                        }
                    }
                },
                
            }
        });
});
</script>



    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrapValidator.min.js"></script>

  </body>
</html>