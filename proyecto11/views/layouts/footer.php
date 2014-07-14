 
	 <div class="row">
	 	
	 	<div class="col-md-12">
	 		<hr>
	 		<p class="text-center">
	 			
	 			Clase programación web. <br><span class="glyphicon glyphicon-registration-mark"> </span> <?php echo date('Y'); ?>
	 			
	 		</p>
	 	</div>	
	 	
	 </div>

 </div> <!-- /container -->    

 <script type="text/javascript">
        $(document).ready(function() {
            $(".formulario").fancybox({
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'width': 680,
                'height': 450,
                'type': 'iframe'
            });
        });
    </script>

    <script>
    $(document).ready(function() {
        $('#seleccionarch').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                portada: {
                    validators: {
                        file: {
                            extension: 'jpeg,png',
                            type: 'image/jpeg,image/png',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'The selected file is not valid'
                        }
                    }
                }
            }
        });
    });
  </script>

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
                      idcontinente: {
                          validators: {
                              notEmpty: {
                                  message: 'El id continente es requerido.'
                              }
                          }
                      },
                      bandera: {
                          validators: {
                              notEmpty: {
                                  message: 'La bandera es requerida.'
                              }
                          }
                      },
                      idpais: {
                          validators: {
                              notEmpty: {
                                  message: 'El id pais es requerido'
                              }
                          }
                      },
                      escudo: {
                          validators: {
                              notEmpty: {
                                  message: 'El escudo es requerido.'
                              }
                          }
                      },
                      idequipo: {
                          validators: {
                              notEmpty: {
                                  message: 'El id equipo es requerido.'
                              }
                          }
                      },
                      Edad: {
                          validators: {
                              notEmpty: {
                                  message: 'La edad es requerida.'
                              }
                          }
                      },
                      foto: {
                          validators: {
                              notEmpty: {
                                  message: 'La foto es requerida.'
                              }
                          }
                      }, 
                      estatura: {
                          validators: {
                              notEmpty: {
                                  message: 'La estatura es requerida.'
                              }
                          }
                      }, 
                      peso: {
                          validators: {
                              notEmpty: {
                                  message: 'El peso es requerido.'
                              }
                          }
                      }, 
                      apellido: {
                          validators: {
                              notEmpty: {
                                  message: 'El apellido es requerido.'
                              }
                          }
                      },
                      abreviatura: {
                          validators: {
                              notEmpty: {
                                  message: 'La abreviatura es requerida.'
                              }
                          }
                      }, 
                      Nombre: {
                          validators: {
                              notEmpty: {
                                  message: 'El Nombre es requerido.'
                              }
                          }
                      },                                                                                                                                
                  }
              });
      });
      </script>

      <script>
    $(document).ready(function() {
        $('#integerForm').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                number: {
                    validators: {
                        integer: {
                            message: 'The value is not an integer'
                        }
                    }
                }
            }
        });
    });
    </script>

    <script>
  $(document).ready(function() {
      $('#fecha').datetimepicker();

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
                            message: 'El editorial es requerido'
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