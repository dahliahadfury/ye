<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function login($nim, $password)
	{
		$where = array(
            'nim' => $nim,
            'password' => $password
        );

        $result = $this->db->get_where('user',$where);

        if ($result === null) {
        	return false;
        } else{
        	return $result->result_array();
        }

	}

	
///
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */