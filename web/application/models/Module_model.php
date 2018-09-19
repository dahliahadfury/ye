<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module_model extends CI_Model {
	public function get_data()
    {
        $query = $this->db->get('download');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }

    }
	

}