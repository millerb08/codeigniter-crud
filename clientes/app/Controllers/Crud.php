<?php namespace App\Controllers;

use App\Models\ClientesModel;

class Crud extends BaseController
{
	public function index()
	{
		$CRUD = new ClientesModel();
		$datos = $CRUD->listar();

		$mensaje = session('mensaje');

		$res = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];

		return view('clientes', $res);
	}

	public function crear(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"apellido" => $_POST['apellido'],
			"celular" => $_POST['celular'],
			"correo" => $_POST['correo'],
			"edad" => $_POST['edad'],
			"genero" => $_POST['genero']
		];

		$CRUD = new ClientesModel();
		$res = $CRUD->insertar($datos);

		if($res > 0){
			return redirect()->to(base_url().'/')->with('mensaje', '1');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje', '0');

		}
	}

	public function actualizar(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"apellido" => $_POST['apellido'],
			"celular" => $_POST['celular'],
			"correo" => $_POST['correo'],
			"edad" => $_POST['edad'],
			"genero" => $_POST['genero']
		];

		$id = $_POST['id'];
		$CRUD = new ClientesModel();
		$res = $CRUD->actualizar($datos, $id);


		if($res){
			return redirect()->to(base_url().'/')->with('mensaje', '2');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje', '3');
		}
	}

	public function getCliente($id){
		$data =[ "id" => $id];

		$CRUD = new ClientesModel();
		$cliente = $CRUD->cliente($data);

		$res = [
			"datos" => $cliente
		];
		
		return view('actualizar', $res);
	}

	public function eliminar($id){
		$CRUD = new ClientesModel();
		$data = ["id" => $id];
		$res = $CRUD->eliminar($data);

		if($res){
			return redirect()->to(base_url().'/')->with('mensaje', '4');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje', '5');
		}
	}

	public function crearCliente(){
		return view('crear');
	}

}
