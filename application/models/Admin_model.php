<?php
defined('BASEPATH') OR exit('No direct access allowed');

class Admin_model extends CI_MODEL{
	
	public function login($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->where('status', 1);
		$type = array('admin', 'superadmin');
		$this->db->where_in('user_type', $type);
		$query = $this->db->get('users');
		//$sql = $this->db->last_query();
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	
	public function insert($data = array(),$table) { 
        if(!empty($data)){ 
            $insert = $this->db->insert($table, $data); 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    }
	
	function retrieve($table){
			$this->db->select('*');
			//$this->db->order_by("created","desc");
			$this->db->from($table);
			$query=$this->db->get();
			return $query->result_array();
    }
	
}