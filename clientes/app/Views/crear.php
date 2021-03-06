<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crear</title>
  </head>
  <body>
  <div class="container">
  <h1>Crear cliente</h1>
  <form id="validateForm" class="form-horizontal needs-validation" method="POST" action="<?php echo base_url().'/crear'?>" novalidate>

                <div class="form-group">
                    <label class="control-label">Nombre</label>
                    <input  id="nombre" name="nombre" placeholder="Nombre" class="form-control"  type="text">
                </div>

                <div class="form-group">
                    <label class="control-label">Apellido</label>
                    <input  id="apellido" name="apellido" placeholder="Apellido" class="form-control"  type="text">
                </div>
                
                <div class="form-group">
                    <label class="control-label">Celular</label>
                    <input id="celular" name="celular" placeholder="Celular" class="form-control" type="number">
                </div>

                <div class="form-group">
                    <label class="control-label">Correo</label>
                    <input  id="correo" name="correo" placeholder="Correo" class="form-control"  type="text">
                </div>

                <div class="form-group">
                    <label class="control-label">Edad</label>
                    <input id="edad" name="edad" placeholder="Edad" class="form-control" type="number">
                </div>

                <div class="form-group">
                <label class="control-label" for="genero">Genero</label>
                    <select type="text" name="genero" id="genero" class="form-control" required>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" >Guardar</button>
                    <a href="<?php echo base_url()?>" class="btn btn-success">Atras</a>
                </div>

        </form>         
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

    <script type ="text/javascript">
        $(document).ready(function(){
            $('#validateForm').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                nombre: {
                    validators: {
                        stringLength: {
                            min: 4,
                            max: 25,
                            message: 'Ingrese un valor de entre 4 y 25 caracteres'
                        },
                        notEmpty: {
                            message: 'Ingrese su Nombre'
                        }
                    }
                },
                apellido: {
                    validators: {
                        stringLength: {
                            min: 4,
                            max: 25,
                            message: 'Ingrese un valor de entre 4 y 25 caracteres'
                        },
                        notEmpty: {
                            message: 'Ingrese su Apellido'
                        }
                    }
                },
                celular: {
                    validators: {
                        stringLength: {
                            min: 10,
                            max: 15,
                            message: 'Ingrese un valor de entre 10 y 15 caracteres'
                        },
                        numeric: {
                            message: 'El celular debe ser un numero'
                        },
                        notEmpty: {
                            message: 'Ingrese su numero de celular'
                        }
                    }
                },
                edad: {
                    validators: {
                        stringLength: {
                            max: 3,
                            message: 'Longitud minima 3'
                        },
                        numeric: {
                            message: 'La Edad debe ser un numero'
                        },
                        notEmpty: {
                            message: 'Ingrese su Edad'
                        }
                    }
                },
                genero: {
                    validators: {
                        notEmpty: {
                            message: 'Genero es una opcion requerida'
                        }
                    }
                },
                correo: {
                    validators: {
                        notEmpty: {
                            message: 'Ingrese su correo'
                        },
                        emailAddress: {
                            message: 'Ingrese un correo valido'
                        }
                    }
                }        
                }
            });
        });
   
    </script>
    
    

  </body>
</html>