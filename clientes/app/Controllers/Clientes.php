<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Clientes extends Controller
{


    public function index()
    {

        $db = \Config\Database::connect();

        //$query = $db->query('SELECT id, nombre, correo FROM clientes limit 10');
        //$results = $query->getResult();

        $builder = $db->table('clientes');
        $results   = $builder->get()->getResult(); //SELECT * FROM clientes

        $res = array(
            "status" => 200,
            "total_registros" => count($results),
            "clientes" => $results
        );

        echo json_encode($res);

    }

    public function id($id){
        $db = \Config\Database::connect();

        $query = $db->query('SELECT * FROM clientes WHERE id = '.$id);
        $results = $query->getResult();

        if(!empty($results)){
            $res = array(
                "status" => 200,
                "total_registros" => count($results),
                "clientes" => $results
            );
        }else{
            $res = array(
                "status" => 404,
                "total_registros" => null,
                "msg" => "No existe cliente"
            );
        }

        echo json_encode($res);
    }


}