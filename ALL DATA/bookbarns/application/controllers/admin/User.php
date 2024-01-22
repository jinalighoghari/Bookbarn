<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User extends CI_Controller
{
	
	function __construct()
	{
	  parent::__construct();
	  $this->load->model("admin/UserM","um");
	}

	public function index()
	{
		
		$temp=array(
        "user"=>$this->um->selectalluser(),

			);
		$this->load->view('admin/user',$temp);
	}
	public function UWishlist($id)
	{
		$data=array("userid"=>$id);

		$wBooks=$this->um->Wishlistbook($data);
		$wBooksId=array();
		foreach ($wBooks as $b) {
			$wBooksId[]=$b->bookid;
		}
		
		$temp=array(
			"wishlist"=>$this->um->selectwishlist($wBooksId)
			
		);


		$this->load->view("admin/uwishlist",$temp);
	}

	public function usermoreinfo($id)
	{
		$data=array("u.userid"=>$id);

		$temp=array(
			"books"=>$this->um->selectMyBooks($data),
			"users"=>$this->um->selectUserInfo($data)
		);
		// echo "<pre>";
		// print_r($temp);
		// die();
		$this->load->view("admin/userinfo",$temp);
	}
}

?>