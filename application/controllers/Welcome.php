<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		public function __construct() {

		parent::__construct();
		error_reporting(E_ALL);
		ini_set('display_errors', 0);
		ini_set('max_execution_time', 0);
		$this->load->model('dashboard_model');
		
	}
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
	public function index()
	{
		$data['title'] = "Dashboard";
		$tablename = "hotel_info";
		$data['hotelData'] = $this->dashboard_model->getDetailsArray($tablename);
	
		$tablename1 = "refund_price";
		$data['refund_priceData'] = $this->dashboard_model->getRow('id',1,$tablename1);
		$data['userdata'] = $this->session->userdata;
		$this->load->view('front_head/header_link', $data);
		$this->load->view('front_head/header',$data);
		$this->load->view('front/dashboard', $data);
		$this->load->view('front_head/footer');
	}
}
