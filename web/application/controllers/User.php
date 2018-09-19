<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		
	}
	
	public function login()
	{
		$this->load->view('users/login');
	}

	public function authentication()
	{
		$this->load->model('User_model');
		$nim = $this->input->post('nim');
		$password = $this->input->post('password');

		$check = $this->User_model->login($nim, $password);

		if (!$check) {

			$user_data = array(
				'logged_in' => false,
				'message' => 'invalid'
			);
			$this->session->set_userdata($user_data);
			redirect('User/login');

		} else{
			foreach ($check as $key) {
				$user_data = array(
					'logged_in' => true,
					'nim' => $key['nim'],
					'message' => "valid"
				 );
				if ($user_data['nim']==='admin') {
					$user_data['admin'] = true;
					$this->session->set_userdata($user_data);
					$this->load->view('Pages/home');
				} else{
					$user_data['admin'] = false;
					$this->session->set_userdata($user_data);
					$this->load->view('Pages/home');

				}
			}

		}

		

	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('message');
		$this->session->unset_userdata('nim');
		$this->session->unset_userdata('admin');
		redirect('Pages/view');
	}



}

/* End of file User.php */
/* Location: ./application/controllers/User.php */