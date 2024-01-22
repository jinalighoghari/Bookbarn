<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class HomeCategory extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model("HomeCategoryM","hcm");
	}


	public function imgcat1()
	{
 	$data["catname"]="Comics";
	$binfo=$this->hcm->selectAllBooks($data);
		$temp=array(
			"books"=>$binfo,
			"cat"=>$this->hcm->selectallcategories()
		);


		$this->load->view("homecategory",$temp);
 	}

  	public function imgcat2()
 	{
 		$data["catname"]="Arts & Photography";
		$binfo=$this->hcm->selectAllBooks($data);
		$temp=array(
			"books"=>$binfo,
			"cat"=>$this->hcm->selectallcategories()
		);

		$this->load->view("homecategory",$temp);
 	}

 	public function imgcat5()
 	{
 		$data["catname"]="Business & Money";
		$binfo=$this->hcm->selectAllBooks($data);
		$temp=array(
			"books"=>$binfo,
			"cat"=>$this->hcm->selectallcategories()
		);
		$this->load->view("homecategory",$temp);
 	}

	public function imgcat3()
 	{
 		$data["catname"]="Children's Books";
		$binfo=$this->hcm->selectAllBooks($data);
		$temp=array(
			"books"=>$binfo,
			"cat"=>$this->hcm->selectallcategories()
		);
		$this->load->view("homecategory",$temp);
 	}

	public function imgcat4()
 	{
 		$data["catname"]="Travel";
		$binfo=$this->hcm->selectAllBooks($data);
		$temp=array(
			"books"=>$binfo,
			"cat"=>$this->hcm->selectallcategories()
		);
		$this->load->view("homecategory",$temp);
 	}

 	public function banner4()
 	{
 		$data["cityname"]="Surat";
		$binfo=$this->hcm->selectAllBooks($data);
		$temp=array(
			"books"=>$binfo,
			"cat"=>$this->hcm->selectallcategories()
		);
		$this->load->view("homecategory",$temp);
 	}

 	public function banner5()
 	{
 		$data["cityname"]="Chennai";
		$binfo=$this->hcm->selectAllBooks($data);
		$temp=array(
			"books"=>$binfo,
			"cat"=>$this->hcm->selectallcategories()
		);
		$this->load->view("homecategory",$temp);
 	}

 	public function category($id)
 	{
 		$data["c.catid"]=$id;
		$binfo=$this->hcm->selectAllBooks($data);
		$temp=array(
			"books"=>$binfo,
			"cat"=>$this->hcm->selectallcategories()
		);
		$this->load->view("homecategory",$temp);
 	}

}
?>