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
    <link rel="stylesheet" href="css/bootstrap-multiselect.css" />  
    <link rel="stylesheet" href="css/chosen.min.css" />  
    
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap-multiselect.js"></script>  
    <script src="js/chosen.jquery.min.js"></script>


    
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
        <div class="col-md-12"><br/>
          <form id="accountForm" method="post" class="form-horizontal">
            <div class="tab-content">
                <div class="tab-pane active" id="info-tab">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Full name</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="fullName" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Company</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="company" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Job title</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="jobTitle" />
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="address-tab">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Address</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="address" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">City</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="city" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Country</label>
                        <div class="col-lg-5">
                            <select class="form-control" name="country">
                                <option value="">Select a country</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                <option value="IT">Italy</option>
                                <option value="JP">Japan</option>
                                <option value="RU">Russian</option>
                                <option value="US">United State</option>
                                <option value="GB">United Kingdom</option>
                                <option value="other">Other</option>
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
      <div class="row">
        <div class="col-md-12"><br/>
          <form id="multiselectForm" method="post" class="form-horizontal">
              <div class="form-group">
                  <label class="col-lg-3 control-label">Gender</label>
                  <div class="col-lg-5">
                      <select class="form-control" name="gender">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-lg-3 control-label">Browser</label>
                  <div class="col-lg-5">
                      <select class="form-control" name="browsers" multiple>
                          <option value="chrome">Google Chrome</option>
                          <option value="firefox">Firefox</option>
                          <option value="ie">IE</option>
                          <option value="safari">Safari</option>
                          <option value="opera">Opera</option>
                          <option value="other">Other</option>
                      </select>
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

      <div class="row">
        <div class="col-md-12"><br/>
          <style type="text/css">
          #chosenForm .chosen-choices {
              border: 1px solid #ccc;
              border-radius: 4px;
              min-height: 34px;
              padding: 6px 12px;
          }
          #chosenForm .form-control-feedback {
              /* To make the feedback icon visible */
              z-index: 100;
          }
          </style>        
          <form id="chosenForm" method="post" class="form-horizontal">
              <div class="form-group">
                  <label class="col-lg-3 control-label">Favorite color</label>
                  <div class="col-lg-5">
                      <select name="colors" class="form-control chosen-select"
                          multiple data-placeholder="Choose 2-4 colors">
                          <option value="black">Black</option>
                          <option value="blue">Blue</option>
                          <option value="green">Green</option>
                          <option value="orange">Orange</option>
                          <option value="red">Red</option>
                          <option value="yellow">Yellow</option>
                          <option value="white">White</option>
                      </select>
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
                      fullName: {
                          validators: {
                              notEmpty: {
                                  message: 'The full name is required'
                              }
                          }
                      },
                      company: {
                          validators: {
                              notEmpty: {
                                  message: 'The company name is required'
                              }
                          }
                      },
                      address: {
                          validators: {
                              notEmpty: {
                                  message: 'The address is required'
                              }
                          }
                      },
                      city: {
                          validators: {
                              notEmpty: {
                                  message: 'The city is required'
                              }
                          }
                      }
                  }
              });
      });
      </script>
     <script>
          $(document).ready(function() {
              $('#multiselectForm')
                  .find('[name="gender"]')
                      .multiselect()
                      .end()
                  .find('[name="browsers"]')
                      .multiselect({
                          // Re-validate the multiselect field when it is changed
                          onChange: function(element, checked) {
                              $('#multiselectForm')
                                  .data('bootstrapValidator')                 // Get plugin instance
                                  .updateStatus('browsers', 'NOT_VALIDATED')  // Update field status
                                  .validateField('browsers');                 // and re-validate it
                          }
                      })
                      .end()
                  .bootstrapValidator({
                      // Exclude only disabled fields
                      // The invisible fields set by Bootstrap Multiselect must be validated
                      excluded: ':disabled',
                      feedbackIcons: {
                          valid: 'glyphicon glyphicon-ok',
                          invalid: 'glyphicon glyphicon-remove',
                          validating: 'glyphicon glyphicon-refresh'
                      },
                      fields: {
                          gender: {
                              validators: {
                                  notEmpty: {
                                      message: 'The gender is required'
                                  }
                              }
                          },
                          browsers: {
                              validators: {
                                  callback: {
                                      message: 'Please choose 2-3 browsers you use for developing',
                                      callback: function(value, validator) {
                                          // Get the selected options
                                          var options = validator.getFieldElements('browsers').val();
                                          return (options != null && options.length >= 2 && options.length <= 3);
                                      }
                                  }
                              }
                          }
                      }
                  });
          });
    </script>  

    <script>
    $(document).ready(function() {
        $('#chosenForm')
            .find('[name="colors"]')
                .chosen()
                // Re-validate the color when it is changed
                .change(function(e) {
                    $('#chosenForm')
                        .data('bootstrapValidator')
                        .updateStatus('colors', 'NOT_VALIDATED')
                        .validateField('colors');
                })
                .end()
            .bootstrapValidator({
                excluded: ':disabled',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    colors: {
                        validators: {
                            callback: {
                                message: 'Please choose 2-4 color you like most',
                                callback: function(value, validator) {
                                    // Get the selected options
                                    var options = validator.getFieldElements('colors').val();
                                    return (options != null && options.length >= 2 && options.length <= 4);
                                }
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