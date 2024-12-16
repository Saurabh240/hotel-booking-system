<?php



defined('BASEPATH') OR exit('No direct script access allowed');





class Dashboard_model extends CI_Model{

	public function admin_login_process($data){
       $auth=$this->db->get_where("tbladmin",array("strEmail"=>$data['strEmail'],"strPassword"=>$data['strPassword']))->result();
        return $auth;
    }

    public function user_login_process($data){
       $auth=$this->db->get_where("user",array("email"=>$data['email'],"password"=>$data['password']))->result();
        return $auth;
    }

    public function save_data($tablename, $data){
        $this->db->insert($tablename, $data);
        return $this->db->insert_id();
    }

    public function getDetails($tablename){
        return $this->db->get($tablename)->result();
    }

    public function getDetailsArray($tablename){
    return $this->db->get($tablename)->row();
}


    public function getOrderDetails($field, $val, $tablename){
        $this->db->where($field, $val);
        return $this->db->get($tablename)->result();
    }

    public function getDetailsLimit($tablename){
        $this->db->limit(5000);
        return $this->db->get($tablename)->result();
    }

    public function getRow($field, $value, $tablename){
        $this->db->where($field, $value);
        return $this->db->get($tablename)->row();
    }

    public function getLatestRow($field, $value, $tablename, $orderColumn = 'id') {
        $this->db->where($field, $value);
        $this->db->order_by($orderColumn, 'DESC');
        return $this->db->get($tablename)->row();
    }


    public function update_data($field, $value, $tablename, $data){
        $this->db->where($field, $value);
        $this->db->update($tablename,$data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function delete_data($field, $value, $tablename){
        $this->db->where($field, $value); 
        if($this->db->delete($tablename)){
            return true;
        }else{
            return false;
        }
    }

    

}
?>