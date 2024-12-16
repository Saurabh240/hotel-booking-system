<?php

defined('BASEPATH') OR exit('No direct script access allowed');

function get_state_name($id){
	$ci = &get_instance();
	$ci->db->where('id', $id);
	return $ci->db->get('states')->row();
}

function getUserInfo($id){
	$ci = &get_instance();
	$ci->db->where('id', $id);
	return $ci->db->get('user')->row();
}
function getRoomName($id){
	$ci = &get_instance();
	$ci->db->where('id', $id);
	return $ci->db->get('hotel_info')->row();
}

function getBookinginfo($id){
	$ci = &get_instance();
	$ci->db->where('id', $id);
	return $ci->db->get('hotel_booking')->row();
}

?>