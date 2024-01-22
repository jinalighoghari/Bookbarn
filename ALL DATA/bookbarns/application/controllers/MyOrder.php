<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MyOrder extends CI_Controller
{

    function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model("MyOrderM","mo");
		
	}
    

    public function index()
    {
        $data=array("b.userid"=>$_SESSION['uid']);
        $temp=array(
        "books"=>$this->mo->Orders($data),
        "cat"=>$this->mo->selectallcategories()
            );
    	$this->load->view('myorders',$temp);
    }

    public function MyOrders()
    {
    	$data=array("a.userid"=>$_SESSION['uid']);
        $temp=array(
        "books"=>$this->mo->Orders($data),
        "cat"=>$this->mo->selectallcategories()
            );
    	$this->load->view('morders',$temp);
    }
}
?>