<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class ManageProfile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/ManageprofileM","mp");
	}
	public function loadadminprofile()
	{
		$data=array("adminid"=>$_SESSION['uid']);
		$temp=array(
			"admininfo"=>$this->mp->selectadminInfo($data)

        );
		$this->load->view("admin/editprofile",$temp);
	}
	
	public function editimage()
	{
	if($_FILES['fup']['name']!="")
	{
		$img=$_FILES['fup']['name'];
copy($_FILES['fup']['tmp_name'], "C:/wamp64/www/bookbarns/resources/shared/images/".$img) or die("Cannot Upload Image");
$data=array("imageurl"=>$img);
$_SESSION['propic']=$img;
$this->mp->updateadminInfo($data);
	}	
		
		redirect("admin/AHome");

	}

	public function editbasic()
	{

		$data=array(
        "adminname"=>$this->input->post('txtaname'),
                "email"=>$this->input->post('txtemail'),
           "contactno"=>$this->input->post('txtcon')
			);
		$_SESSION['uname']=$this->input->post('txtaname');
		$this->mp->updateadminInfo($data);
		// redirect("admin/Admin");
		redirect("admin/AHome");

	}

	public function editpass()
	{
		$opwd=$this->input->post('txtopsw');
		$npwd=$this->input->post('txtnpsw');
		$cpwd=$this->input->post('txtcpsw');
		$data=array("adminid"=>$_SESSION['uid']);
        $adinfo=$this->mp->selectadminInfo($data);
		if($npwd!==$cpwd)
		{
		$temp=array(
			"admininfo"=> $adinfo,
			"errMsg"=>"Passcode and Confirm Password Doesn't Match"
        );
             $this->load->view("admin/editprofile",$temp);
		}
		else
		{
         if($opwd!==$adinfo->password)
         {
         	$temp=array(
			"admininfo"=> $adinfo,
			"errMsg"=>"Invalid Old Passcode"
        );
             $this->load->view("admin/editprofile",$temp);
         }
         else
         {
         	$data=array(
               "password"=>$npwd
			);
			$this->mp->updateadminInfo($data);
			$temp=array(
			"admininfo"=> $adinfo,
			"errMsg"=>"Passcode Changed"
        );
			 $this->load->view("admin/editprofile",$temp);

         }
		}
	}

}

?>