<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class appliance_repair extends MY_Controller {

	Public function __construct() { 
		parent::__construct(); 
		$this->load->library('cart');
		$this->load->model('CartM');
	}

	public function index()
	{
		$data=array();
		
		$data['subcategory_name'] = $this->appliancemodel->fetch_subcategory();
		//echo "<pre>";
		//print_r($data);
		//exit;
		$this->load->view('user/select-appliance',$data);
	}

	public function service()
	{
		$this->form_validation->set_rules('subcategory_name', 'Category', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run())
		{
			$sid=$this->input->post('subcategory_name');
			$this->session->set_userdata('subcategory_id',$sid);
			redirect('user/appliance_repair/view_service');
		}
		else
		{
			$data=array();
			$data['subcategory_name'] = $this->appliancemodel->fetch_subcategory();
			$this->load->view('user/select-appliance',$data);
		}
	}
	public function view_service()
	{
		$sval=$this->session->userdata('subcategory_id');
		$data['products']=$this->appliancemodel->getRows($sval);
		$this->load->view('user/appliance_repair',$data);
	}
	public function addtocart($proID)
	{
		$svl=$this->session->userdata('subcategory_id');
		
        // Fetch specific product by ID
		$product=$this->CartM->getRows($svl,$proID);

		// Add product to the cart
		$data=array(
			'id'=> $product['bookid'],
			'name' =>$product['bookname'],
			'qty'=> 1,
			'price'=> $product['price']
		);
		$this->cart->insert($data);
		redirect('user/appliance_repair/view_service');
	}

}

