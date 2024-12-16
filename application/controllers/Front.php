<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
		public function __construct() {

		parent::__construct();
		error_reporting(E_ALL);
		ini_set('display_errors', 0);
		ini_set('max_execution_time', 0);
		$this->load->model('dashboard_model');
		
	}

	public function sendEmail()
	{
			$userId = 1;
			$hotel_id = 1;
			//send email
			$getRow = $this->dashboard_model->getRow('id', $userId, 'user');
			$customerEmail = $getRow->email;
			$firstname = $getRow->first_name;

			$hoteIds = $hotel_id;
			$getBookinginfo = getBookinginfo($hoteIds);
			$formattedDate = date("M d, Y", strtotime($getBookinginfo->createAt));

			$date = new DateTime($getBookinginfo->createAt);

		// Add one day
		$date->modify('+1 day');
		$newDate = $date->format('Y-m-d H:i:s');
		$newDateInfo = date("M d, Y", strtotime($newDate));
		$data = array(
			"sender" => array(
				"email" => 'jenishghadiya43@gmail.com',
				"name" => 'Booking Confirmation - Do no reply to this email.'         
			),
			"to" => array(
				array(
					"email" => $customerEmail,
					"name" => $firstname
				)
		
			),
			"subject" => 'Booking Confirmation',
			"htmlContent" => '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        p {
            margin: 0 0 15px;
        }
        .booking-details {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 8px;
        }
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Booking Confirmation</h1>
        <p>Dear '.$this->input->post('first_name').',</p>
        <p>Thank you for booking with our hotel. We are delighted to confirm your reservation.</p>
        
        <div class="booking-details">
            <h3>Booking Details</h3>
            <p><strong>Booking ID:</strong> [Booking ID]</p>
            <p><strong>Hotel Name:</strong> Hotel</p>
            <p><strong>Check-In Date:</strong> '.$formattedDate.'</p>
            <p><strong>Check-Out Date:</strong> '.$newDateInfo.'</p>
            <p><strong>Guests:</strong> 2</p>
            <p><strong>Total Amount:</strong> CHF '. number_format($getBookinginfo->price, 2, '.', '').'</p>
        </div>
        
        <p>If you have any questions or need to modify your booking, please don’t hesitate to contact us at +91 96525222522.</p>
        
        <p>We look forward to welcoming you to Hotel!</p>
        <p>Best regards,</p>
        <p>The Hotel Team</p>
    </div>
</body>
</html>'

		);

		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, 'https://api.sendinblue.com/v3/smtp/email');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		
		$headers = array();
		$headers[] = 'Accept: application/json';
		$headers[] = 'Api-Key: weqwwqdqerfeqf12dw';
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
		$result = curl_exec($ch);
		echo '<pre>';print_r($result);exit;
	}

	public function refundOrder()
	{
		$postArr =$this->input->post();
		$hotelOrderId = $postArr['hotelOrderId'];
		$data_id = $postArr['data_id'];
		$updateData = ['order_status' => 2];
		$this->dashboard_model->update_data('id', $hotelOrderId, 'order_details', $updateData);
		echo '1';exit;
	}

	public function custmerBooking()
	{
		$postArr =$this->input->post();
		$room_id = $postArr['data_id'];
		$adults = $postArr['adults'];
		$children = $postArr['children'];
		$rooms = $postArr['rooms'];
		// $refund_price_info = $postArr['refund_price_info'];
		
		$total_price_info = $postArr['total_price_info'];
		$newBookingId = "#hotel".rand(0000,9999);
		$userId = $this->session->userdata('userid');
		if(!empty($rooms)){
			$finalPrice = $total_price_info;
		}else{
			$finalPrice = $total_price_info;
		}
		
		$data = array(
			   'hotel_id' => $newBookingId,
				'user_id' => $userId,
				'price' => $finalPrice,
				'room_id' => $room_id,
				'adults' => $adults,
				'children' => $children,
				'rooms' => $rooms,
				// 'refund_id' => $refund_price_info,
			);	
		
		$tablename = "hotel_booking";
		$addId = $this->dashboard_model->save_data($tablename, $data);
		$this->session->set_userdata('newBookingId', $newBookingId);
		echo 1;exit;
	}

	public function checkout(){
		$newBookingId = $this->session->userdata('newBookingId');
		$data['newBookingId'] = $this->dashboard_model->getRow('hotel_id',$newBookingId,'hotel_booking');
		$data['title'] = "Checkout";
		$tablename1 = "refund_price";
		$data['refund_priceData'] = $this->dashboard_model->getRow('id',1,$tablename1);
		$this->load->view('front_head/header_link', $data);
		$this->load->view('front_head/header',$data);
		$this->load->view('front/checkout', $data);
		$this->load->view('front_head/footer');
	}

	public function login(){

		$data['title'] = "Dashboard";
		$this->load->view('front_head/header_link', $data);
		$this->load->view('front_head/header',$data);
		$this->load->view('front/login', $data);
		$this->load->view('front_head/footer');
	}

	public function thankyou(){
		$userId = $this->session->userdata('userid');
		$getLatestRow = $this->dashboard_model->getLatestRow('user_id', $userId, 'order_details', $orderColumn = 'id');
		$data['getLatestRow'] = $getLatestRow;
		$data['title'] = "Thank You";
		$this->load->view('front_head/header_link', $data);
		$this->load->view('front_head/header',$data);
		$this->load->view('front/thankyou', $data);
		$this->load->view('front_head/footer');
	}


	public function orderhistory(){
		$userid = $this->session->userdata('userid');
		
		$getOrderDetails = $this->dashboard_model->getOrderDetails('user_id',$userid, 'order_details');
		$data['getOrderDetails'] = $getOrderDetails;
		$data['title'] = "Order History";
		$this->load->view('front_head/header_link', $data);
		$this->load->view('front_head/header',$data);
		$this->load->view('front/orderhistory', $data);
		$this->load->view('front_head/footer');
	}

	

	

	public function register()
	{
		$data = array(
			'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);	
		$tablename = "user";
		$addId = $this->dashboard_model->save_data($tablename, $data);
		if($addId){

			$customerEmail = $this->input->post('email');
			$firstname = $this->input->post('first_name');
		$data = array(
			"sender" => array(
				"email" => 'jenishghadiya43@gmail.com',
				"name" => 'New Registration - Do no reply to this email.'         
			),
			"to" => array(
				array(
					"email" => $customerEmail,
					"name" => $firstname
				)
		
			),
			"subject" => 'Hotel System Account Create',
			$htmlContent = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hotel Request Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        p {
            margin: 0 0 15px;
        }
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Thank You for Your Request!</h1>
        <p>Dear '.$firstname.',</p>
        <p>We have received your request regarding [Request Details]. Our team is currently reviewing it and will get back to you shortly.</p>
        <p>If you have any additional questions or need further assistance, please feel free to contact us at +91 96525222522.</p>
        <p>Thank you for choosing our hotel. We look forward to serving you.</p>
        <p>Best regards,</p>
        <p>The Hotel Team</p>
    </div>
</body>
</html>'

		);

		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, 'https://api.sendinblue.com/v3/smtp/email');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		
		$headers = array();
		$headers[] = 'Accept: application/json';
		$headers[] = 'Api-Key: weqwwqdqerfeqf12dw';
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
		$result = curl_exec($ch);




			$this->session->set_flashdata('insert_success_message', 'Account Created Successfully');
			redirect('front/login');
		}
		else{
			redirect('front/login');
		}
	}

	public function checkLogin(){  

	$data = array(
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
	
		$user_data = $this->dashboard_model->user_login_process($data);

		if(count($user_data)==1) {

				if(isset($user_data[0]->first_name) AND isset($user_data[0]->last_name) AND isset($user_data[0]->email)){

					$this->session->set_userdata('fname', $user_data[0]->first_name);

					$this->session->set_userdata('lname', $user_data[0]->last_name);

					$this->session->set_userdata('email', $user_data[0]->email);

					$this->session->set_userdata('userid', $user_data[0]->id);
				}
				redirect('welcome');
		       
		}else{
			$this->session->set_flashdata('message', 'Email Or Password Incorrect');
  			redirect('front/login');
		}
		
	}

	public function orderbooking()
	{
		$postArr = $this->input->post();
		
		$userId = $this->session->userdata('userid');

		//update
		$updateBook = ['refund_id' => $postArr['refund_id'], 'price' => $postArr['total_refund_price']];
		$this->dashboard_model->update_data('id', $postArr['hotel_id'], 'hotel_booking', $updateBook);
		//edn

		$data = array(
			'user_id' => $userId,
			'booking_id' => $this->input->post('hotel_id'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'country' => $this->input->post('country'),
			'city' => $this->input->post('city'),
			'address' => $this->input->post('address'),
			'postal_code' => $this->input->post('postal_code'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'card_number' => $this->input->post('card_number'),
			'cvv' => $this->input->post('cvv'),
			'card_name' => $this->input->post('card_name'),
			'expiry_date' => $this->input->post('expiry_date'),
			'order_date' => date('Y-m-d')
			);
		$tablename = "order_details";
		$addId = $this->dashboard_model->save_data($tablename, $data);
		$this->session->unset_userdata('newBookingId');

		//send email
			$getRow = $this->dashboard_model->getRow('id', $userId, 'user');
			$customerEmail = $getRow->email;
			$firstname = $getRow->first_name;
			$hoteIds = $this->input->post('hotel_id');
			$getBookinginfo = getBookinginfo($hoteIds);
			$formattedDate = date("M d, Y", strtotime($getBookinginfo->createAt));

			$date = new DateTime($getBookinginfo->createAt);

		// Add one day
		$date->modify('+1 day');
		$newDate = $date->format('Y-m-d H:i:s');
		$newDateInfo = date("M d, Y", strtotime($newDate));
		$data = array(
			"sender" => array(
				"email" => 'jenishghadiya43@gmail.com',
				"name" => 'Booking Confirmation - Do no reply to this email.'         
			),
			"to" => array(
				array(
					"email" => $customerEmail,
					"name" => $firstname
				)
		
			),
			"subject" => 'Booking Confirmation',
			"htmlContent" => '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        p {
            margin: 0 0 15px;
        }
        .booking-details {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 8px;
        }
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Booking Confirmation</h1>
        <p>Dear '.$this->input->post('first_name').',</p>
        <p>Thank you for booking with our hotel. We are delighted to confirm your reservation.</p>
        
        <div class="booking-details">
            <h3>Booking Details</h3>
            <p><strong>Booking ID:</strong> '.$getBookinginfo->hotel_id.'</p>
            <p><strong>Hotel Name:</strong> Hotel</p>
            <p><strong>Check-In Date:</strong> '.$formattedDate.'</p>
            <p><strong>Check-Out Date:</strong> '.$newDateInfo.'</p>
            <p><strong>Guests:</strong> 2</p>
            <p><strong>Total Amount:</strong> CHF '. number_format($getBookinginfo->price, 2, '.', '').'</p>
        </div>
        
        <p>If you have any questions or need to modify your booking, please don’t hesitate to contact us at +91 96525222522.</p>
        
        <p>We look forward to welcoming you to Hotel!</p>
        <p>Best regards,</p>
        <p>The Hotel Team</p>
    </div>
</body>
</html>'

		);

		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, 'https://api.sendinblue.com/v3/smtp/email');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		
		$headers = array();
		$headers[] = 'Accept: application/json';
		$headers[] = 'Api-Key: weqwwqdqerfeqf12dw';
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
		$result = curl_exec($ch);
		//end



		redirect('front/thankyou');
	}

	public function checkGroupBooking()
	{
		$postArr = $this->input->post();
		$data['adults'] = $postArr['adults'];
		$data['children'] = $postArr['children'];
		$data['rooms'] = $postArr['rooms'];
		$data['title'] = "Dashboard";
		$tablename = "hotel_info";
		$data['hotelData'] = $this->dashboard_model->getDetails($tablename);
		$tablename1 = "refund_price";
		$data['refund_priceData'] = $this->dashboard_model->getRow('id',1,$tablename1);
		$data['userdata'] = $this->session->userdata;
		$this->load->view('front_head/header_link', $data);
		$this->load->view('front_head/header',$data);
		$this->load->view('front/groupbooking', $data);
		$this->load->view('front_head/footer');
	}

	public function logout(){

		$this->session->unset_userdata('email');

		$this->session->unset_userdata('fname');

		$this->session->unset_userdata('lname');
		$this->session->unset_userdata('userid');

			redirect('welcome');

	}

}