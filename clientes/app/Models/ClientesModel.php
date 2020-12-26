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
}