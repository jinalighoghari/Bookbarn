<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Changepass extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model("ChangepassM","mp");
		if(!isset($_SESSION['uname']))
		{
			redirect("User");
		}
	}
	public function index()
	{
		$data=array("userid"=>$_SESSION['uid']);
		$temp=array(
			"userinfo"=>$this->mp->selectUserInfo($data)

        );
		$this->load->view('changepass',$temp);
	}

	
	public function editPass()
	{
		$opwd=$this->input->post('txtopwd');
		$npwd=$this->input->post('txtnpwd');
		$cpwd=$this->input->post('txtcpwd');
		$data=array("userid"=>$_SESSION['uid']);
		$uinfo=$this->mp->selectUserInfo($data);
		if($npwd!==$cpwd)
		{
			
			$temp=array(
			"userinfo"=>$uinfo,
			"errMsg"=>"New and Confirm password must match"
			);
			$this->load->view("changepass",$temp);
		}
		else
		{
			if ($opwd!=$uinfo->userpassword) 
			{
				$temp=array(
			"userinfo"=>$uinfo,
			"errMsg"=>"Invalid Old Password"
			);
			$this->load->view("changepass",$temp);
			}
			else
			{
				$data=array(
						"userpassword"=>$npwd
						);
				$this->mp->updateuserInfo($data);
				$temp=array(
				"userinfo"=>$uinfo,
				"errMsg"=>"Password changed"
			);
				$this->load->view("changepass",$temp);
			}

		}

		
	}

}
?>