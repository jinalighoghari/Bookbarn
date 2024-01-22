<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Inquiry extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('cart');
    $this->load->model("InquiryM","im");
  }
	public function index()
	{
    

    $data=array("touserid"=>$_SESSION['uid']);
    $temp1=$this->im->selectInquiry($data);
    $temp=array(
          "iqrs"=>$this->im->selectInquiry($data),
          "cat"=>$this->im->selectallcategories()
      );
    $this->load->view('inquiry',$temp);
	}


  public function sendReply($id,$buid,$inid)
  {
    $dt=@date('Y-M-D');
  
    
    $data=array(
      "reply"=>$this->input->post('txtmsg'),
      "bookid"=>$id,
      "fromuserid"=>$_SESSION['uid'],
      "touserid"=>$buid,
      "datetime"=>$dt,
      "status"=>"1"
      
    );
    $where=array("inquiryid"=>$inid);
    $this->im->addReply($data,$where);

    redirect('Inquiry/');
    
  }

  public function Answers()
  {


    $data=array("touserid"=>$_SESSION['uid']);
    $temp1=$this->im->selectInquiry($data);
    //$fid=array("fromuserid"=>$temp1[0]->fromuserid);
    $temp=array(
          "iqrs"=>$this->im->selectInquiry($data),
          "cat"=>$this->im->selectallcategories()
      );

    $this->load->view("reply",$temp);
  }

  public function Resendinquiry($id,$buid)
  {
    $dt=@date('Y-M-D');
    
    $data=array(
      "message"=>$this->input->post('txtmsg'),
      "bookid"=>$id,
      "fromuserid"=>$_SESSION['uid'],
      "touserid"=>$buid,
      "datetime"=>$dt
      
    );
    $this->im->insertQuiry($data);
    redirect('Inquiry/Answers');
    
  }
}
?>