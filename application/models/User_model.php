<?php
defined('BASEPATH') OR exit('No direct access allowed');

class User_model extends CI_MODEL{
	
	function getfromid($id,$table){
            $query = $this->db->get_where($table, array('id' => $id));
            return $query->row_array();
    }
	
	function update_cart($rowid, $qty, $price, $amount) {
 		$data = array(
			'rowid'   => $rowid,
			'qty'     => $qty,
			'price'   => $price,
			'amount'   => $amount
		);
		$this->cart->update($data);
	}
	
	public function get_count_product() {
        return $this->db->count_all('products');
    }
	
	public function get_products($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('products');

        return $query->result();
    }

    public function get_products_bylimit() {
        $this->db->select('*');
		$this->db->from('products');
		$this->db->order_by('created','desc');
		$this->db->limit(4);
		$query=$this->db->get();
        return $query->result();
    }
    public function get_products_bylimitlast() {
        $this->db->select('*');
		$this->db->from('products');
		$this->db->order_by('created','desc');
		$this->db->limit(4,4);
		$query=$this->db->get();
        return $query->result();
    }
	
	function getRow($params = array()){
        $this->db->select('*');
        $this->db->from('products');
        
        if(array_key_exists("url_slug", $params)){
            $this->db->where('slug', $params['url_slug']);
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }
	
	function getptype($params = array()){
        $this->db->select('*');
			$this->db->where('product_type', $params['prodtyp']);
			$this->db->from('products');
			$query=$this->db->get();
			return $query->result_array();
    }
	
	function get_search($params ){
			$this->db->select('*');
			$this->db->like('name', $params);
			$this->db->from('products');
			$query=$this->db->get();
			return $query->result_array();
    }
	
	public function get_allproducts() {
        $this->db->select('*');
		$this->db->from('products');
		$this->db->order_by('created','desc');
		$query=$this->db->get();
        return $query->result();
    }
	
}