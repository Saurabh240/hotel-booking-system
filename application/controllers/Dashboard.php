<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
		public function __construct() {

		parent::__construct();
		error_reporting(E_ALL);
		ini_set('display_errors', 0);
		ini_set('max_execution_time', 0);
		$this->load->model('dashboard_model');
		if($this->session->userdata('email') == null){
			redirect('login');
		}
	}


	public function index(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Dashboard";
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/dashboard', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	
	public function countrylist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Country";
			$tablename = "countries";
			$data['countryData'] = $this->dashboard_model->getDetails($tablename);
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/countrymaster/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	
	public function viewOrder($id){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Order Info";
			$tablename = "order_details";
			$data['orderDetails'] = $this->dashboard_model->getRow('id', $id, $tablename);
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/bookingmaster/view', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	public function bookinglist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Order Info";
			$tablename = "order_details";
			$data['orderDetails'] = $this->dashboard_model->getDetails($tablename);
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/bookingmaster/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}



	public function statelist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "State";
			$tablename = "states";
			$data['stateData'] = $this->dashboard_model->getDetails($tablename);
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/statemaster/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	public function refundlist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "State";
			$tablename = "refund_price";
			$data['refund_priceData'] = $this->dashboard_model->getRow('id',1,$tablename);
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/refund/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}


	public function finaciallist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Finacial";
			$tablename = "order_details";
			$data['order_details'] = $this->dashboard_model->getDetails($tablename);
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/finacial/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

		public function userreportlist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Finacial";
			$tablename = "order_details";
			$data['order_details'] = $this->dashboard_model->getDetails($tablename);
			$data['user_details'] = $this->dashboard_model->getDetails('user');
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/report/userlist', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	public function getHotelReport()
{
    $hotel_filter = $this->input->post('hotel_filter');
    

    $this->db->select('order_details.*, hotel_info.hotel_name');
    $this->db->from('order_details');
    $this->db->join('hotel_booking', 'order_details.booking_id = hotel_booking.id', 'inner');
    $this->db->join('hotel_info', 'hotel_booking.room_id = hotel_info.id', 'inner');

   

    // Apply hotel filter
    if (!empty($hotel_filter)) {
        $this->db->where('hotel_info.id', $hotel_filter);
    }

    $query = $this->db->get();
    $data['order_details'] = $query->result();

  

   $data['title'] = "Finacial";
			$tablename = "order_details";
			
			$data['hotel_info'] = $this->dashboard_model->getDetails('hotel_info');
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/report/hotellist', $data);
			$this->load->view('header/footer');
}


		public function hotelreportlist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Finacial";
			$tablename = "order_details";
			$data['order_details'] = $this->dashboard_model->getDetails($tablename);
			$data['hotel_info'] = $this->dashboard_model->getDetails('hotel_info');
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/report/hotellist', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	public function getUserReport()
{
    
    $username_filter = $this->input->post('username_filter');
    $hotel_filter = $this->input->post('hotel_filter');
    

    $this->db->select('*')->from('order_details');

    // Apply username filter
    if ($username_filter) {
        $this->db->where('user_id', $username_filter);
    }

    // Apply hotel filter
    if ($hotel_filter) {
        $this->db->where('hotel_id', $hotel_filter);
    }

    $query = $this->db->get();
    $data['order_details'] = $query->result();

    $data['title'] = "Finacial";
			
			
			$data['user_details'] = $this->dashboard_model->getDetails('user');
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/report/userlist', $data);
			$this->load->view('header/footer');
}




	

	public function getReport() {
	    $filter_option = $this->input->post('filter_option');
	    $start_date = $this->input->post('start_date');
	    $end_date = $this->input->post('end_date');

	    if ($filter_option == 'today') {
	        $this->db->where('DATE(order_date)', date('Y-m-d'));
	    } elseif ($filter_option == 'yesterday') {
	        $this->db->where('DATE(order_date)', date('Y-m-d', strtotime('yesterday')));
	    } elseif ($filter_option == 'last_month') {
	        $this->db->where('MONTH(order_date)', date('m', strtotime('last month')));
	        $this->db->where('YEAR(order_date)', date('Y', strtotime('last month')));
	    } elseif ($filter_option == 'custom' && $start_date && $end_date) {
	        $this->db->where('DATE(order_date) >=', $start_date);
	        $this->db->where('DATE(order_date) <=', $end_date);
	    }

	    $query = $this->db->get('order_details');
	    $orderDatas = $query->result();

	    $data['title'] = "Finacial";
		$tablename = "order_details";
		$data['order_details'] = $orderDatas;
		$data['userdata'] = $this->session->userdata;
		$this->load->view('header/header_link', $data);
		$this->load->view('header/header',$data);
		$this->load->view('header/sidebar',$data);
		$this->load->view('admin/finacial/list', $data);
		$this->load->view('header/footer');
	}


	

	public function citylist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "City";
			$tablename = "cities";
			$data['cityData'] = $this->dashboard_model->getDetailsLimit($tablename);

			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/citymaster/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}


	public function property_highlight(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Property Highlight";
			$tablename = "property_highlight";
			$data['propertyHighlightData'] = $this->dashboard_model->getDetails($tablename);
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/property_highlight/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	public function facilitieslist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Facilities";
			$tablename = "facilities";
			$data['facilitiesData'] = $this->dashboard_model->getDetails($tablename);
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/facilitieslist/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	

	public function categorylist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Category";
			$tablename = "category";
			$data['categoryData'] = $this->dashboard_model->getDetails($tablename);
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/category/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	public function hotellist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Hotel";
			$tablename = "hotel_info";
			$data['hotelData'] = $this->dashboard_model->getDetails($tablename);
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/hotel/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	public function userlist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "User List";
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/user/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

		public function ratinglist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Rating List";
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/rating/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

		public function couponlist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Coupon List";
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/coupon/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	

	public function driverlist(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Driver List";
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/driver/list', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	public function addCategory(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Add Category";
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/category/add', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	public function addHotel(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Add Category";
			$data['userdata'] = $this->session->userdata;
			$data['categoryData'] = $this->dashboard_model->getDetails('category');
			$data['countryData'] = $this->dashboard_model->getDetails('countries');
			$data['stateData'] = $this->dashboard_model->getDetails('states');
			$data['cityData'] = $this->dashboard_model->getDetailsLimit('cities');
			$data['propertyHighlightData'] = $this->dashboard_model->getDetails('property_highlight');
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/hotel/add', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}

	public function addPropertyHighlight(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Add Property Highlight";
			$data['userdata'] = $this->session->userdata;
			
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/property_highlight/add', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}


	public function addFacilities(){
		if($this->session->userdata('email')!=null){
			$data['title'] = "Add Facilities";
			$data['userdata'] = $this->session->userdata;
			
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/facilitieslist/add', $data);
			$this->load->view('header/footer');
		}else{
			redirect('login');
		}
	}


	public function saveRefundPrice(){

	if($this->session->userdata('email')!=null){
			$postArr = $this->input->post();
			$data = [
	     		'price' => $postArr['price'],
				
			];
			$tablename = "refund_price";
			$addId = $this->dashboard_model->update_data('id',1,$tablename, $data);
			if($addId){
				$this->session->set_flashdata('insert_success_message', 'Price Added Successfully');
				redirect('dashboard/refundlist');
			}
			else{
				redirect('dashboard/refundlist');
			}
	}else{
			redirect('login');
	}
}

	
	public function saveCategoryCenter(){

	if($this->session->userdata('email')!=null){
			$postArr = $this->input->post();
			$data = [
	     		'category_name' => $postArr['category_name'],
				'status' => $postArr['status'],
			];
			$tablename = "category";
			$addId = $this->dashboard_model->save_data($tablename, $data);
			if($addId){
				$this->session->set_flashdata('insert_success_message', 'Category Added Successfully');
				redirect('dashboard/categorylist');
			}
			else{
				redirect('dashboard/categorylist');
			}
	}else{
			redirect('login');
	}
}

	public function saveProperty(){

	if($this->session->userdata('email')!=null){
			$postArr = $this->input->post();
			$data = [
	     		'property_name' => $postArr['property_name'],
			];
			$tablename = "property_highlight";
			$addId = $this->dashboard_model->save_data($tablename, $data);
			if($addId){
				$this->session->set_flashdata('insert_success_message', 'Property Added Successfully');
				redirect('dashboard/property_highlight');
			}
			else{
				redirect('dashboard/property_highlight');
			}
	}else{
			redirect('login');
	}
}

	public function saveFacilities(){

	if($this->session->userdata('email')!=null){
			$postArr = $this->input->post();
			$data = [
	     		'facilities_name' => $postArr['facilities_name'],
			];
			$tablename = "facilities";
			$addId = $this->dashboard_model->save_data($tablename, $data);
			if($addId){
				$this->session->set_flashdata('insert_success_message', 'Facilities Added Successfully');
				redirect('dashboard/facilitieslist');
			}
			else{
				redirect('dashboard/facilitieslist');
			}
	}else{
			redirect('login');
	}
}

public function saveHotel(){

		if($this->session->userdata('email')!=null){
		$postArr = $this->input->post();
		
		//save image icon

            $config['upload_path']          = './uploads/';

            $config['allowed_types']        = '*';

            $config['encrypt_name']         = true;

            $config['max_width']            = 6024;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('hotel_image')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                if ($_FILES['hotel_image']['name'] != '') {
                    $fileData = $this->upload->data();
                    $hotel_image = $fileData['file_name'];
                }
            }
            //end
        $hotel_code = "hotel".rand(0000,9999);
     	$data = [
     		'hotel_code' => $hotel_code,
			'category_name' => $postArr['category_name'],
			'hotel_name' => $postArr['hotel_name'],
			'descption' => $postArr['descption'],
			'country' => $postArr['country'],
			'state' => $postArr['state'],
			'city' => $postArr['city'],
			'guests' => $postArr['guests'],
			'bedrooms' => $postArr['bedrooms'],
			'beds' => $postArr['beds'],
			'bathrooms' => $postArr['bathrooms'],
			'rating' => $postArr['rating'],
			'hotel_image' => $hotel_image,
			'price' => $postArr['price'],
			'location' => $postArr['location'],
			'status' => $postArr['status'],
		];

		$tablename = "hotel_info";
		$addId = $this->dashboard_model->save_data($tablename, $data);
		if($addId){
			$this->session->set_flashdata('insert_success_message', 'Hotel Added Successfully');
			redirect('dashboard/hotellist');
		}
		else{
			redirect('dashboard/hotellist');
		}
		}else{
			redirect('login');
		}
	}

	public function saveBloodCenter(){

		if($this->session->userdata('email')!=null){
		$postArr = $this->input->post();
		
		//save image icon

            $config['upload_path']          = './uploads/';

            $config['allowed_types']        = '*';

            $config['encrypt_name']         = true;

            $config['max_width']            = 6024;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('center_image')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                if ($_FILES['center_image']['name'] != '') {
                    $fileData = $this->upload->data();
                    $center_image = $fileData['file_name'];
                }
            }
            //end
        $center_unique_id = "bloodc".rand(0000,9999);
     	$data = [
     		'center_unique_id' => $center_unique_id,
			'center_name' => $postArr['center_name'],
			'center_address' => $postArr['center_address'],
			'center_state' => $postArr['center_state'],
			'center_city' => $postArr['center_city'],
			'center_pincode' => $postArr['center_pincode'],
			'center_lat' => $postArr['center_lat'],
			'center_long' => $postArr['center_long'],
			'center_email' => $postArr['center_email'],
			'center_phonenumber' => $postArr['center_phonenumber'],
			'center_emg_phonenumber' => $postArr['center_emg_phonenumber'],
			'center_location_map' => $postArr['center_location_map'],
			'center_rating' => $postArr['center_rating'],
			'center_image' => $center_image,
			'center_website' => $postArr['center_website'],
			'status' => $postArr['status'],
		];

		$tablename = "tblblood_center";
		$addId = $this->dashboard_model->save_data($tablename, $data);
		if($addId){
			$this->session->set_flashdata('insert_success_message', 'Blood Center Added Successfully');
			redirect('dashboard/bloodcenterlist');
		}
		else{
			redirect('dashboard/bloodcenterlist');
		}
		}else{
			redirect('login');
		}
	}

	public function editBloodCenter($id){

		if($this->session->userdata('email')!=null){

			if(isset($_POST['update'])){

			$postArr = $this->input->post();

            $config['upload_path']          = './uploads/';

            $config['allowed_types']        = '*';

            $config['encrypt_name']         = true;

            $config['max_width']            = 6024;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('center_image')) {
			 $tablename = "tblblood_center";
            $get_image = $this->dashboard_model->getRow('id',$id, $tablename);
            $center_image = $get_image->center_image;
            //end data

                $error = array('error' => $this->upload->display_errors());

            } else {
                if ($_FILES['center_image']['name'] != '') {
                    $fileData = $this->upload->data();
                    $center_image = $fileData['file_name'];
                }
            }
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = '*';
            $config['encrypt_name']         = true;
            $config['max_width']            = 6024;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('center_image')) {
            $tablename = "tblblood_center";
            $get_image = $this->dashboard_model->getRow('id',$id, $tablename);
            $center_image = $get_image->center_image;
                $error = array('error' => $this->upload->display_errors());
            } else {
                if ($_FILES['center_image']['name'] != '') {
                    $fileData = $this->upload->data();
                    $center_image = $fileData['file_name'];
                }
            }

		$data = [
     		'center_name' => $postArr['center_name'],
			'center_address' => $postArr['center_address'],
			'center_state' => $postArr['center_state'],
			'center_city' => $postArr['center_city'],
			'center_pincode' => $postArr['center_pincode'],
			'center_lat' => $postArr['center_lat'],
			'center_long' => $postArr['center_long'],
			'center_email' => $postArr['center_email'],
			'center_phonenumber' => $postArr['center_phonenumber'],
			'center_emg_phonenumber' => $postArr['center_emg_phonenumber'],
			'center_location_map' => $postArr['center_location_map'],
			'center_rating' => $postArr['center_rating'],
			'center_image' => $center_image,
			'center_website' => $postArr['center_website'],
			'status' => $postArr['status'],
		];
		$tablename = "tblblood_center";
			$updateCheck = $this->dashboard_model->update_data('id', $id, $tablename, $data);
			if($updateCheck){
				$this->session->set_flashdata('insert_success_message', 'Blood Center Updated Successfully');
				redirect('dashboard/bloodcenterlist');
			}
			else{
				redirect('dashboard/bloodcenterlist');
			}
		}else{
			$tablename = "tblblood_center";
			$data['bloodInfo'] = $this->dashboard_model->getRow('id',$id, $tablename);
			$data['title'] = "Edit Blood";
			$data['userdata'] = $this->session->userdata;
			$this->load->view('header/header_link', $data);
			$this->load->view('header/header',$data);
			$this->load->view('header/sidebar',$data);
			$this->load->view('admin/bloodcenter/edit', $data);
			$this->load->view('header/footer');
		}
		}else{
			redirect('login');
		}
	}

	public function deleteBloodCenter($id){
		if($this->session->userdata('email')!=null){
			if(isset($id)){
				$tablename = "tblblood_center";
				$data = ['status' => 0];
				$delete_check = $this->dashboard_model->update_data('id', $id, $tablename, $data);
				if($delete_check){
					$this->session->set_flashdata('insert_success_message', 'Blood Center Deleted Successfully');
					redirect('dashboard/bloodcenterlist');
				}
				else{
					$this->session->set_flashdata('insert_success_message', 'Opps!Some thing Went Wrong ! Try again..');
					redirect('dashboard/bloodcenterlist');
				}
			}
		}else{
			redirect('login');
		}
	}

	
}




 // $this->load->library('upload');

 //        // Set upload path and other configurations
 //        $config['upload_path']   = './uploads/hotel_images/';
 //        $config['allowed_types'] = 'jpg|jpeg|png|gif';
 //        $config['max_size']      = 2048; // Max 2MB
 //        $config['encrypt_name']  = TRUE; // Encrypt file names

 //        if (!is_dir($config['upload_path'])) {
 //            mkdir($config['upload_path'], 0777, TRUE);
 //        }

 //        $images = $_FILES['images'];
 //        $filesCount = count($images['name']);
 //        $uploadedFiles = [];

 //        for ($i = 0; $i < $filesCount; $i++) {
 //            $_FILES['image']['name']     = $images['name'][$i];
 //            $_FILES['image']['type']     = $images['type'][$i];
 //            $_FILES['image']['tmp_name'] = $images['tmp_name'][$i];
 //            $_FILES['image']['error']    = $images['error'][$i];
 //            $_FILES['image']['size']     = $images['size'][$i];

 //            // Initialize the upload library with the config
 //            $this->upload->initialize($config);

 //            if ($this->upload->do_upload('image')) {
 //                $uploadedFiles[] = $this->upload->data();
 //            } else {
 //                // Handle errors
 //                echo $this->upload->display_errors();
 //            }
 //        }

 //        // Process uploaded files
 //        if (!empty($uploadedFiles)) {
 //            // Example: Store in database or perform further actions
 //            foreach ($uploadedFiles as $file) {
 //                // Save file info to the database (example)
 //                $data = [
 //                    'hotel_id' => 1, // Replace with actual hotel ID
 //                    'image_name' => $file['file_name'],
 //                    'uploaded_on' => date('Y-m-d H:i:s'),
 //                ];
 //                $this->db->insert('hotel_images', $data);
 //            }
 //            echo "Images uploaded successfully!";
 //        } else {
 //            echo "No files were uploaded.";
 //        }