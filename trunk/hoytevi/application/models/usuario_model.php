<?php
class Usuario_model extends CI_Model {

function guardarUsuario($insert)
{
    $this->db->insert('users', $insert); 

    if($this->db->affected_rows() > 0)
	{
	    // Code here after successful insert
	    return true; // to the controller
	}else{
		return false;
	}
}

}
