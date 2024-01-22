<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Orders extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		//$this->load->library('cart');
		$this->load->model("admin/AHomeM","am");
		
	}
    public function index()
    {

        $temp=array(
 "books"=>$this->am->Orders()
);
    	$this->load->view('admin/order',$temp);
    }

    
}

?>