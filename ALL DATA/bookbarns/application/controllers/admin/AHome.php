<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class AHome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/AHomeM","hm");
		
	}

public function index()
{
	

	$temp=array(
	"totalbooks"=>$this->hm->Books(),
	"totaluser"=>$this->hm->Users(),
	"categories"=>$this->hm->Category(),
	"mlikedbooks"=>$this->hm->Mostlikedbook(),
	"order"=>$this->hm->totalorders()

	

);
	

	$this->load->view("admin/adminhome",$temp);
}
 

}

?>