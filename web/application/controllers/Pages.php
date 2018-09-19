<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			
			//$data['title'] = ucfirst($page);
			$this->load->view('pages/'.$page);
			
	}
	public function structure()
	{
		$this->load->model('Structure_model');
		$data['mentor'] = $this->Structure_model->get_data();
        $this->load->view('pages/structure', $data);
	}
	public function module()
	{
		$this->load->model('Module_model');
		$data['download'] = $this->Module_model->get_data();
        $this->load->view('pages/module', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */