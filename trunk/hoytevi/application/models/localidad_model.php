<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Localidad_model extends CI_Model
{
    
    public function __construct()
    {
        
        parent::__construct();
        
    }
    
    public function buscador($abuscar)
    {
        //usamos after para decir que empiece a buscar por
        //el principio de la cadena
        //ej SELECT localidad from localidades_es 
        //WHERE localidad LIKE '%$abuscar' limit 12
        $this->db->select('id, description');

        $this->db->like('description',$abuscar,'after');
        
        $resultados = $this->db->get('localities', 12);
        
        //si existe algún resultado lo devolvemos
        if($resultados->num_rows() > 0)
        {
            
            return $resultados->result();
            
        //en otro caso devolvemos false
        }else{
            
            return FALSE;
            
        }
        
    }

}
/*
 * end application/models/autocompletado_model.php
 */