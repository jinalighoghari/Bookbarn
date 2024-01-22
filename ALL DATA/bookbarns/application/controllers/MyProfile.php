<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MyProfile extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model("MyProfileM","mp");
		
	}
	public function index()
	{
		if(!isset($_SESSION['uname']))
		{
			redirect("User");
		}
		else
		{
		$data=array("userid"=>$_SESSION['uid']);
		$temp=array(
			"userinfo"=>$this->mp->selectUserInfo($data),
			"cat"=>$this->mp->selectallcategories()

        );
		$this->load->view("myProfile",$temp);
		}
	}

	public function loadOtherUserBasic($id)
	{
		$data=array("userid"=>$id);
		if($id==$_SESSION['uid'])
		{
			redirect("MyProfile/index",$temp);
		}
		else
		{
			$temp=array(
			"userinfo"=>$this->mp->selectUserInfo($data),
			"cat"=>$this->mp->selectallcategories()
			);
		$this->load->view("ouProfile",$temp);
		}
	
	}


	public function loadOtherUserBook($id)
	{
		$data=array("u.userid"=>$id);
		$temp=array(
				"books"=>$this->mp->selectMyBooks($data),
				"userinfo"=>$this->mp->selectUserInfo($data),
				"cat"=>$this->mp->selectallcategories()
			);
		
		$this->load->view("ouBooks",$temp);
	}

	
	public function editbasic()
	{

		$data=array(
        "username"=>$this->input->post('txtuname'),
        "firstname"=>$this->input->post('txtfname'),
        "lastname"=>$this->input->post('txtlname'),
        "useremailid"=>$this->input->post('txtemail'),
        "contactno"=>$this->input->post('txtcon')
			);
		$_SESSION['uname']=$this->input->post('txtuname');

		$this->mp->updateuserInfo($data);
		redirect("MyProfile");

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
			"errMsg"=>"New and Confirm password must match",
			"cat"=>$this->mp->selectallcategories()
			);
			$this->load->view("myProfile",$temp);
		}
		else
		{
			if ($opwd!=$uinfo->userpassword) 
			{
				$temp=array(
			"userinfo"=>$uinfo,
			"errMsg"=>"Invalid Old Password",
			"cat"=>$this->mp->selectallcategories()
			);
			$this->load->view("myProfile",$temp);
			}
			else
			{
				$data=array(
						"userpassword"=>$npwd
						);
				$this->mp->updateuserInfo($data);
				$temp=array(
				"userinfo"=>$uinfo,
				"errMsg"=>"Password changed",
				"cat"=>$this->mp->selectallcategories()
			);
				$this->load->view("myProfile",$temp);
			}

		}

		
	}

}
?>