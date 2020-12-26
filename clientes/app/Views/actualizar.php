<?php
    $id = $datos[0]['id'];
    $nombre = $datos[0]['nombre'];
    $apellido = $datos[0]['apellido'];
    $celular = $datos[0]['celular'];
    $correo = $datos[0]['correo'];
    $edad = $datos[0]['edad'];
    $genero = $datos[0]['genero'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualizar</title>
  </head>
  <body>
  <div class="container">
        <h1>CRUD Clientes</h1> 
                <form class="form-horizontal needs-validation" method="POST" action="<?php echo base_url().'/actualizar'?>" novalidate>
                <input type="text" id="id" name="id" hidden="" value="<?php echo $id?>">

                <div class="form-row">
                    <label class="control-label" for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre?>" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>

                <div class="form-row">
                    <label class="control-label" for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control"value="<?php echo $apellido?>" required>
                    <div class="invalid-feedback">Complete el campo</div>
                    
                </div>

                <div class="form-row">
                    <label class="control-label" for="celular">Celular</label>
                    <input type="number" name="celular" id="celular" class="form-control" value="<?php echo $celular?>" required>
                    <div class="invalid-feedback">Complete el campo</div>
                    
                </div>

                <div class="form-row">
                    <label class="control-label" for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $correo?>" required>
                    <div class="invalid-feedback">Complete el campo</div>      
                </div>

                <div class="form-row">
                    <label class="control-label" for="edad">Edad</label>
                    <input type="number" name="edad" id="edad" class="form-control" value="<?php echo $edad?>" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>

                <div class="form-row">
                    <label class="control-label" for="genero">Genero</label>
                    <select type="text" name="genero" id="genero" class="form-control" required>
                        <?php if($genero == "Masculino"):?>
                        <option value="Masculino" selected>Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <?php else:?>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino" selected>Femenino</option>
                        <?php endif ?>
                    </select>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
                <br>
					<button type= "submit" class="btn btn-primary">Guardar</button>
                    <a href="<?php echo base_url()?>" class="btn btn-success">Atras</a>
                </form>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type ="text/javascript">
        (function () {
            'use strict';
            window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
                }, false);
            });
            }, false);
        })();
    </script>


  </body>
</html>