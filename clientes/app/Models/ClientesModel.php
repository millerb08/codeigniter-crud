<?php namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    public function listar(){
        $clientes = $this->db->query("SELECT * FROM t_clientes");
        return $clientes->getResult();
    }

    public function insertar($data){
        $cliente = $this->db->table('t_clientes');
        $cliente->insert($data);

        return $this->db->insertID();
    }

    public function cliente($id){
        $cliente = $this->db->table('t_clientes');
        $cliente->where($id);
        
        return $cliente->get()->getResultArray();
    }

    public function actualizar($data ,$id){
        $cliente = $this->db->table('t_clientes');
        $cliente->set($data);
        $cliente->where('id',$id);

        return $cliente->update();
    }

    public function eliminar($id){
        $cliente = $this->db->table('t_clientes');
        $cliente->where($id);

        return $cliente->delete();
    }

    public function getHombresMujeres(){
        $hombres = $this->db->table('t_clientes')->where('genero','Masculino');
        $numHombres = count($hombres->get()->getResult());

        $mujeres = $this->db->table('t_clientes')->where('genero','Femenino');
        $numMujeres = count($mujeres->get()->getResult());

        $data = [
            "hombres" => $numHombres,
            "mujeres" => $numMujeres
        ];

        return $data;
    }

    public function getEdades(){
        $edadHombres=[];
        $edadMujeres=[];

        $hombres = $this->db->table('t_clientes')->where('genero','Masculino')->where('edad >', '17')->where('edad <', '30');
        $edadHombres[] = count($hombres->get()->getResult());

        $mujeres = $this->db->table('t_clientes')->where('genero','Femenino')->where('edad >', '17')->where('edad <', '30');
        $edadMujeres[] = count($mujeres->get()->getResult());

        $hombres = $this->db->table('t_clientes')->where('genero','Masculino')->where('edad >', '29')->where('edad <', '40');
        $edadHombres[] = count($hombres->get()->getResult());

        $mujeres = $this->db->table('t_clientes')->where('genero','Femenino')->where('edad >', '29')->where('edad <', '40');
        $edadMujeres[] = count($mujeres->get()->getResult());

        $hombres = $this->db->table('t_clientes')->where('genero','Masculino')->where('edad >', '39')->where('edad <', '50');
        $edadHombres[] = count($hombres->get()->getResult());

        $mujeres = $this->db->table('t_clientes')->where('genero','Femenino')->where('edad >', '39')->where('edad <', '50');
        $edadMujeres[] = count($mujeres->get()->getResult());

        $hombres = $this->db->table('t_clientes')->where('genero','Masculino')->where('edad >', '49')->where('edad <', '60');
        $edadHombres[] = count($hombres->get()->getResult());

        $mujeres = $this->db->table('t_clientes')->where('genero','Femenino')->where('edad >', '49')->where('edad <', '60');
        $edadMujeres[] = count($mujeres->get()->getResult());

        $hombres = $this->db->table('t_clientes')->where('genero','Masculino')->where('edad >', '59')->where('edad <', '70');
        $edadHombres[] = count($hombres->get()->getResult());

        $mujeres = $this->db->table('t_clientes')->where('genero','Femenino')->where('edad >', '59')->where('edad <', '70');
        $edadMujeres[] = count($mujeres->get()->getResult());

        $hombres = $this->db->table('t_clientes')->where('genero','Masculino')->where('edad >=', '70');
        $edadHombres[] = count($hombres->get()->getResult());

        $mujeres = $this->db->table('t_clientes')->where('genero','Femenino')->where('edad >=', '70');
        $edadMujeres[] = count($mujeres->get()->getResult());

        $data = [
            "hombres" => $edadHombres,
            "mujeres" => $edadMujeres
        ];

        return $data;
    }
}