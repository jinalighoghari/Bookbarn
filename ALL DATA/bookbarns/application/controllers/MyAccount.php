<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MyAccount extends CI_Controller
{
	
	public function index()
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("User");
		}
		$this->load->view('myAccount');
	}
}
?>