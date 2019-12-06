<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('User_model');
		$this->load->model('Admin_model');
		$this->load->library('cart');
    } 

	public function index()
	{
		$config = array();
        $config["base_url"] = base_url() . "products";
        $config["total_rows"] = $this->User_model->get_count_product();
        $config["per_page"] = 5;
        $config["uri_segment"] = 2;
		
		$config['full_tag_open']    = "<ul class='pagination'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";
		$config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
        $this->pagination->initialize($config); 
		
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"] = $this->pagination->create_links();
		
		$table = 'products';
		$data['user'] = $this->User_model->get_products($config["per_page"], $page);
        $data['first'] = $this->User_model->get_products_bylimit();
        $data['second'] = $this->User_model->get_products_bylimitlast();
        $data['title'] = 'D V Plastics, Hyderabad - Manufacturer of Capsule Bottle and Plastic Bottle';
		$this->load->view('home1',$data);
	}
	
	public function about(){
		$data['title'] = 'D V Plastics - Manufacturer from Cherlapalli, Hyderabad, India | About Us';
		$this->load->view('about',$data);
	}
	
	public function contact(){
		$data['title'] = 'D V Plastics Business enquiry form';
		$this->load->view('contact',$data);
	}
	
	public function products(){
		$data['title'] = 'D V Plastics | Products';
		$data['products'] = $this->User_model->get_allproducts();
		$this->load->view('products',$data);
	}
	
	public function search(){
		$data['title'] = 'Search';
		$search = $this->input->post('searchfield');
		$data['query'] = $this->User_model->get_search($search);
		$this->load->view('search',$data);
	}
	
	public function product_detail($slug){
		
		
		$data['post'] = $this->User_model->getRow(array('url_slug'=>$slug));
		$types = $data['post']['product_type'];
		$data['types'] = $this->User_model->getptype(array('prodtyp'=>$types));
		$data['title'] = $data['post']['name'];
		$this->load->view('product_detail',$data);
	}
	
	public function mobile(){
		$number = '8099049823';
		$custno = $this->input->post('mobile');
		$name = $this->input->post('name');
		$message = $this->input->post('message');
		$url="https://www.way2sms.com/api/v1/sendCampaign";
		$message = urlencode($name.' '.$custno.' '.$message);// urlencode your message
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
		curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=TUW9PPYRFKTQYNZL2OEF3QUSNYOPT1CJ&secret=XEHLP3B48UM6TEZL&usetype=stage&phone=$number&senderid=pavanmaganti9@gmail.com&message=$message");// post data
		// query parameter values must be given without squarebrackets.
		 // Optional Authentication:
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($curl);
		curl_close($curl);
		//echo $result;
		$data['title'] = 'D V Plastics Business enquiry form';
		//$this->load->view('contact',$data);
		redirect('contact', 'refresh');
	}
	
	function addToCart($id){
        
        // Fetch specific product by ID
		$table = 'products';
        $product = $this->User_model->getfromid($id,$table);
		
		$data = array(
        'id'      => $product['id'],
        'qty'     => 1,
        'price'   => 39.95,
		'image'	  => $product['image'],
        'name'    => $product['name'],
        'options' => array('Size' => 'L', 'Color' => 'Red')
);
		//$this->cart->update($data);
		$this->cart->insert($data);
        
        // Redirect to the cart page
		// redirect('cart');
         //$data['title'] = 'Cart';
         redirect('cart');
		//$this->load->view('cart',$data);
    }
	
	public function cart(){
		/* $table = 'products';
        $product = $this->User_model->getfromid($id,$table);
        
        // Add product to the cart
        $data = array(
            'id'    => $product['id'],
            'qty'    => 1,
            //'price'    => $product['price'],
            'name'    => $product['name'],
            'image' => $product['image']
        );
        $this->cart->insert($data); */
        
        // Redirect to the cart page
		 //redirect('cart');
		//$this->load->view('cart',$data);
        //$this->cart->destroy();
		$this->load->view('cart');
	}

    /* public function empty_cart(){
        $this->cart->destroy();
        redirect('cart');
    }

    public function update_item(){
        $data = array(
            'rowid' => $this->input->post('itemid'),
            'qty' => $this->input->post('itemqty')
        );
        $this->cart->update($data);
        redirect('cart');
    } */
}