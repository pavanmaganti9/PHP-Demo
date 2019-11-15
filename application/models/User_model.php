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
	
}