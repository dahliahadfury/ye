<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Structure_model extends CI_Model {
	public function get_data()
    {
        $query = $this->db->get('mentor');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }

    }
	

}

/* End of file Structure_model.php */
/* Location: ./application/models/Structure_model.php */