<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct() { 
        parent::__construct(); 
        $this->load->model('Admin_model');
    }

	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('admin/login',$data);
	}
	
	public function login(){
		
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
		$this->form_validation->set_rules('password', 'password', 'required'); 
		if($this->form_validation->run() == FALSE){
			$data['token'] = $this->auth->token();
			$data['title'] = 'Login';
			$this->load->view('admin/login',$data);
		}else{
			if($this->input->post('admintoken') == $this->session->userdata('token')){
			$email = $this->security->xss_clean($this->input->post('email'));
			$password = $this->security->xss_clean(md5($this->input->post('password')));
			$user = $this->Admin_model->login($email,$password);
			
			if(!empty($user)){
				$userdata = array(
					'id' => $user->id,
					'fname' => $user->fname,
					'lname' => $user->lname,
					'email' => $user->email,
					'user_type' => $user->user_type,
					'authenticated' => TRUE
				);
				
				$this->session->set_userdata($userdata);
				redirect('admin/dashboard');
			}else{
				$this->session->set_flashdata('message', 'Invalid email or password');
				redirect('admin');
			}
			}else{
				redirect('admin');
			}
			$data['title'] = 'Login';
			$this->load->view('admin/login',$data);
		}
		
	}
	
	public function dashboard(){ 
        $data = array(); 
        if($this->session->userdata('email')){ 
            $data['title'] = 'Dashboard';
             
            $this->load->view('admin/dashboard', $data); 
        }else{ 
            redirect('admin'); 
        } 
    }
	
	public function addproduct(){ 
        $data = array(); 
        if($this->session->userdata('email')){ 
            $data['title'] = 'Add Product';
			
			if($this->input->post('productSubmit')){ 
				$this->form_validation->set_rules('productname', 'Product Name', 'required|xss_clean|is_unique[products.name]');
				$this->form_validation->set_rules('productdesc', 'Product Description', 'required|xss_clean'); 
				if (empty($_FILES['productimage']['name']))
				{
					$this->form_validation->set_rules('productimage', 'Product Image', 'required');
				}
				if($this->form_validation->run() == FALSE){
				
					$this->load->view('admin/addproduct', $data);
				
				}else{
					$image = time().'_'.$_FILES["productimage"]['name'];
				
					//$config = array(
					$config['upload_path'] = './assets/images/products/';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['max_size']             = 100000;
					$config['max_width']            = 100000;
					$config['max_height']           = 100000;
					$config['file_name'] = $image;
					//);
					$this->load->library('upload', $config); 
					
					if($this->upload->do_upload('productimage'))
					{
						//$res['msg']="Image has been uploaded!";
						//$this->load->view('image', $res);
						//$this->resizeImage($uploadedImage['file_name']);
					}
					else
					{
					}
					$config_manip['image_library'] = 'gd2';
					//print_r($image);die();
					$config_manip['source_image'] = './assets/images/products/'.$image;
					$config_manip['create_thumb'] = TRUE;
					$config_manip['maintain_ratio'] = FALSE;
					//$config['x_axis'] = 100;
                    //$config['y_axis'] = 60;
					$config_manip['width'] = 1000;
					$config_manip['height'] = 800;
					$this->load->library('image_lib', $config_manip);
					$this->image_lib->resize();
					//$this->image_lib->crop();
					$this->image_lib->clear();
					
					$productData = array( 
					'name' => $this->security->xss_clean($this->input->post('productname')), 
					'desc' => $this->security->xss_clean($this->input->post('productdesc')),
					'image' => $this->security->xss_clean($image),
					'created' => date("Y-m-d H:i:s")
					);
					$table = 'products';
					$insert = $this->Admin_model->insert($productData,$table);
					if($insert){
						
					$this->session->set_flashdata('message', 'Product added successfully');					
						redirect('admin/addproduct'); 
					}else{ 
						$this->session->set_flashdata('message', 'Invalid');
					}
				}
			
			}
             
            $this->load->view('admin/addproduct', $data); 
        }else{ 
            redirect('admin'); 
        } 
    }
	
	public function crop($image_data) {
		$img = substr($image_data['full_path'], 51);
		$config['image_library'] = 'gd2';
		$config['source_image'] = $image_data['full_path'];
		$config['x_axis'] = $this->input->post('x1');
		$config['y_axis'] = $this->input->post('y1');
		$config['maintain_ratio'] = TRUE;
		$config['width'] = $this->input->post('width_cor');
		$config['height'] = $this->input->post('height_cor');
		$config['new_image'] = './uploads/crop_' . $img;

		//send config array to image_lib's  initialize function
		$this->image_lib->initialize($config);
		$src = $config['new_image'];
		$data['crop_image'] = substr($src, 2);
		$data['crop_image'] = base_url() . $data['crop_image'];
		// Call crop function in image library.
		$this->image_lib->crop();
		// Return new image contains above properties and also store in "upload" folder.
		return $data;
	}
	
	public function resizeImage($filename)
	{
		  $source_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $filename;
		  $target_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/thumbnail/';
		  $config_manip = array(
			  'image_library' => 'gd2',
			  'source_image' => $source_path,
			  'new_image' => $target_path,
			  'maintain_ratio' => TRUE,
			  'create_thumb' => TRUE,
			  'thumb_marker' => '_thumb',
			  'width' => 150,
			  'height' => 150
		  );


		  $this->load->library('image_lib', $config_manip);
		  if (!$this->image_lib->resize()) {
			  echo $this->image_lib->display_errors();
		  }


		  $this->image_lib->clear();
	}
	
	public function products(){ 
        $data = array(); 
        if($this->session->userdata('email')){  
			$id = $this->session->userdata('id');
			$data['title'] = 'Products';
			$table = 'products';
            $data['user'] = $this->Admin_model->retrieve($table); 
            //$data['sess'] = $this->Admin_model->getuser($this->session->userdata('id'));
            $this->load->view('admin/products', $data);  
        }else{ 
            redirect('admin'); 
        } 
    }
	
	public function logout(){ 
        $this->session->unset_userdata('userdata'); 
        $this->session->sess_destroy(); 
        redirect('admin'); 
    } 
}