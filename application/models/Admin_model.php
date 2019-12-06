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
	
	function getproduct($id = "",$table){
        if(!empty($id)){
            $query = $this->db->get_where($table, array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('posts');
            return $query->result_array();
        }
    }
	
	public function updateproduct($data, $id, $table) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update($table, $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
	
	public function deleteproduct($id, $table, $image){
		$path = 'assets/images/products/'.$image;
		unlink($path);
		$chunk = explode(".",$image);
        $thumb = $chunk[0]."_thumb.".$chunk[1];
		$path1 = 'assets/images/products/'.$thumb;
		unlink($path1);
        $delete = $this->db->delete($table,array('id'=>$id));
        return $delete;
    }
	
	function getslug($slug, $table){
			$this->db->select('*');
			$this->db->from($table);
			$query=$this->db->get();
			return $query->result_array();
    }
	
	
	
}