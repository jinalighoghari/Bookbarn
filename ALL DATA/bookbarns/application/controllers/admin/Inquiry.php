<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Inquiry extends CI_Controller
{


		 function __construct()
	{
		parent::__construct();
		$this->load->model("admin/AHomeM","hm");
		
	}
	public function index()
	{ 
		$temp=array(
        "inquiries"=>$this->hm->Inquiry()    

		);
		// print_r($temp);
		// die();

		$this->load->view("admin/inquiry",$temp);
	}	

}

?>