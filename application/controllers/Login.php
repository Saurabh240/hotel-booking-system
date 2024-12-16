<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct() {

		parent::__construct();
		$this->load->model('dashboard_model');
		ini_set('max_execution_time', 0);
	}

	public function index()
	{
		$this->checkLogin();
	}

	public function checkLogin(){  

		$submit = $this->input->post('add');
		if(isset($submit)){
			
			$data = array(
					'strEmail' => $this->input->post('email'),
					'strPassword' => md5($this->input->post('password'))
				);
			
				$user_data = $this->dashboard_model->admin_login_process($data);
				if(count($user_data)==1) {

						if(isset($user_data[0]->strFirstName) AND isset($user_data[0]->strLastName) AND isset($user_data[0]->strEmail)){

							$this->session->set_userdata('fname', $user_data[0]->strFirstName);

							$this->session->set_userdata('lname', $user_data[0]->strLastName);

							$this->session->set_userdata('email', $user_data[0]->strEmail);

							$this->session->set_userdata('userid', $user_data[0]->id);
						}
						redirect('dashboard');
				       
				}else{
					$this->session->set_flashdata('message', 'Email Or Password Incorrect');
		  			redirect('login');
				}
		}else{
			$this->load->view('admin/login');
		}
	}

	public function logout(){

		$this->session->unset_userdata('email');

		$this->session->unset_userdata('fname');

		$this->session->unset_userdata('lname');
		$this->session->unset_userdata('userid');

		redirect('login');

	}
}
