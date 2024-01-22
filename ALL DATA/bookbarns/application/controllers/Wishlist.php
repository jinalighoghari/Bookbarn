<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller
{
	
	public function index()
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("User");
		}
		$temp=array( "cat"=>$this->em->selectallcategories());
		$this->load->view('wishlist',$temp);
		$this->load->library('cart');
	}
}

?>