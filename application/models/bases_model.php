<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bases_model extends CI_Model {
    
   function __construct()
    {parent::__construct();}
    
   public function validaLogin($data){
   $cadena="select * from usuario where username='".$data['username']."' and password='".$data['password']."'";
    $query = $this->db->query($cadena);
    if ($query->num_rows() > 0)
        return $query;
      else
        return FALSE;
  }
    
    public function register($data){
   $cadena="select * from usuario where username='".$data['username']."' or telefono='".$data['telefono']."'";
    $query = $this->db->query($cadena);
    if ($query->num_rows() > 0)
        return FALSE;
      else
        $this->db->insert('usuario', $data);
        
        return TRUE;
  }
    
    public function getTareas(){
        $query = 
            "SELECT * FROM tareas";
          $data = $this->db->query($query);
        //$query = $this->db->get('alimentos');
        //$query = $this->db->query("SELECT * FROM alimentos ORDER BY id DESC");
        
        return $data;
    }
    
    
    public function insertTarea($data){
        
        $this->db->insert('Tarea', $data);
    }
    
}