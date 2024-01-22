<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class AdminLogin extends CI_Controller
{
	function __construct()
	{
       parent::__construct();
		$this->load->model('admin/AdminloginM','lm');
	}
	public function index()
	{
		$this->load->view("admin/adminlogin");
	}


	public function LoginValidate()
 {
 	$data=array(
"adminname"=>$this->input->post('txtname'),
"password"=>$this->input->post('txtpwd')
 		);
    $logdata=$this->lm->selectLoginData($data);
 
 if(count($logdata)>0)
 {
$_SESSION['uid']=$logdata[0]->adminid;
$_SESSION['uname']=$logdata[0]->adminname;
$_SESSION['propic']=$logdata[0]->imageurl;
redirect("admin/AHome");
 }
 else
 {
$temp=array("loginErr"=>"Invalid username or password");
 	$this->load->view('admin/adminlogin',$temp);
 }
 }

 public function logout()
{
	session_destroy();
	redirect("admin/AdminLogin");
}


}

?>