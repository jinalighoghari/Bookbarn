<?php
 defined('BASEPATH') OR exit('No direct script access allowed');


class Changeimage extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();
    $this->load->library('cart');
    $this->load->model("MyProfileM","mp");
    if(!isset($_SESSION['uname']))
    {
      redirect("User");
    }
  }
  public function index()
  {
    $data=array("userid"=>$_SESSION['uid']);
    $temp=array(
      "userinfo"=>$this->mp->selectUserInfo($data),
       "cat"=>$this->mp->selectallcategories()

        );
    $this->load->view('changeimage',$temp);
  }

  
  public function editImage()
  {
    if($_FILES['fup']['name']!="")
    {
      $img=$_FILES['fup']['name'];
      copy($_FILES['fup']['tmp_name'], "C:/wamp64/www/bookbarns/resources/shared/images/".$img) or die($_FILES['fup']['error']);

      $data=array("userimageurl"=>$img);
      $_SESSION['propic']=$img;
      $this->mp->updateuserInfo($data);

    }

    redirect("MyProfile");
  }

}
?>