<?php namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    public function listarEstudiantes()
    {
        $consulta=$this->db->query("SELECT * FROM estudiantes");
        return $consulta->getResult();//devolver la consulta anterior en un arreglo
    }
}

?>