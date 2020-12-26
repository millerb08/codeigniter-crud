<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD Clientes!</title>
  </head>
  <body>
    <div class="container">
		<h1>Lista de clientes</h1>
        <div clas="row">
				<div class="col-sm-12">
					<div class="table table-responsive">
						<table class="table table-hover">
							<tr>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Celular</th>
								<th>Correo</th>
								<th>Edad</th>
								<th>Genero</th>
								<th>Editar</th>
								<th>Eliminar</th>
							</tr>
							<?php foreach ($datos as $key): ?>
							<tr>
								<th><?php echo $key->nombre?></th>
								<th><?php echo $key->apellido?></th>
								<th><?php echo $key->celular?></th>
								<th><?php echo $key->correo?></th>
								<th><?php echo $key->edad?></th>
								<th><?php echo $key->genero?></th>
								<th><a href="<?php echo base_url().'/cliente/'.$key->id?>" class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
  <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
</svg></a></th>
								<th><a href="<?php echo base_url().'/eliminar/'.$key->id?>" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></a></th>
							</tr>
							<?php endforeach; ?>
						</table>
					</div>
					<div class="container">
							<a href="<?php echo base_url().'/crear-cliente'?>"class="btn btn-primary">Crear cliente</a>
						</div>
				</div>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		let mensaje = '<?php echo $mensaje?>';
		if(mensaje == '1'){
			swal("Exito", "Agregado con exito", "success");
		}else if(mensaje == '0'){
			swal("Error", "Fallo al agregar", "error");
		}else if(mensaje == '2'){
			swal("Exito", "Actualizado con exito", "success");
		}else if(mensaje == '3'){
			swal("Error", "Fallo al acrualizar", "error");
		}else if(mensaje == '4'){
			swal("Exito", "Eliminado con exito", "success");
		}else if(mensaje == '5'){
			swal("Error", "Fallo al eliminar", "error");
		}
	</script>
  </body>
</html>