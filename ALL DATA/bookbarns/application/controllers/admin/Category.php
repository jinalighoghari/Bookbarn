<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{
	function __construct()
	{
       parent::__construct();
		$this->load->model('admin/CategoryM','cm');
	}

	public function index()
	{

		$temp=array(
         "cats"=>$this->cm->selectAllcategory()
			);
		$this->load->view('admin/allcats',$temp);
	}
	public function addcategory()
	{
		$this->load->view('admin/addcat');
	}

	public function showcat()
	{
		$data=array(
			"catname"=>$this->input->post('txtcatname')
			
		);
		$catData=$this->cm->selectCatData($data);
		if(count($catData)>0)
		{
			$temp=array("err"=>"Category already exist");
			$this->load->view('admin/addcat',$temp);
		}
		else
		{
		$data=array("catname"=>$this->input->post('txtcatname'));
	    $this->cm->insertcat($data);
	    redirect('admin/Category');
		}

       
	}
	public function removecat($id)
	{
		$data=array("catid"=>$id);
		$this->cm->deletecat($data);
		redirect("admin/Category");
	}
	public function loadeditview($id)
	{
		$data=array("catid"=>$id);
		$temp=array(
			"catinfo"=>$this->cm->selectcatbyid($data));
		 $this->load->view('admin/updatecat',$temp);
	}
	public function editcategory($id)
	{
		$where=array("catid"=>$id);
		$newdata=array("catname"=>$this->input->post('txtcatname'));
		$this->cm->updatecat($newdata,$where);
		redirect("admin/Category");
	}
	   public function loadallsubcatbyid($id)
	   {
	   			$data=array("sc.catid"=>$id);

	   	$temp=array(
        "subcat"=>$this->cm->selectSubcatbyCatid($data),
          "catid"=>$id
	   		);
	   	 $this->load->view("admin/allsubcats",$temp);
	   }

	   public function removesubcat($sid,$cid)
	   {
	   	 $data=array("subcatid"=>$sid);
	   	  $this->cm->deletesubcat($data);
  redirect("admin/Category/loadallsubcatbyid/$cid");
	   }

	   public function loadaddsubcat($cid)
	   {
	   	$temp=array("catid"=>$cid);
	   	$this->load->view('admin/addsubcat',$temp);
	   }

	   public function AddsubCat($cid)
	   {
	   	$data=array(
	   	"subcatname"=>$this->input->post('txtsubcatname'),
	   	"catid"=>$cid
	   		);
	   	$this->cm->insertsubcat($data);
	 redirect("admin/Category/loadallsubcatbyid/".$cid);
	   }


	   public function loadeditsubcat($id)
	   {
	   	$data=array("subcatid"=>$id);

       $temp=array(
			"subcatinfo"=>$this->cm->selectsubcatbyid($data)

		);

		 $this->load->view('admin/updatesubcat',$temp);
	   }
	   public function editsubcategory($id,$cid)
	{                 
		$where=array("subcatid"=>$id);
		$newdata=array("subcatname"=>$this->input->post('txtsubcatname'));
		$this->cm->updatesubcat($newdata,$where);
		  redirect("admin/Category/loadallsubcatbyid/$cid");

	}
	public function loadalltagsbysubcatid($id)
	   {
	   			$data=array("t.subcatid"=>$id);

	   	$temp=array(
        "tags"=>$this->cm->selecttagsbysubCatid($data),
          "subcatid"=>$id
	   		);
	   	 $this->load->view("admin/alltags",$temp);
	   }
	  
	   public function loadaddtags($cid)
	   {
	   	$temp=array("subcatid"=>$cid);
	   	$this->load->view('admin/addtags',$temp);
	   }

	   public function Addtag($cid)
	   {
	   	$data=array(
	   	"tagname"=>$this->input->post('txttagname'),
	   	"subcatid"=>$cid
	   		);
	   	$this->cm->insertTag($data);
	 redirect("admin/Category/loadalltagsbysubcatid/".$cid);
	   }

	   public function removetag($sid,$cid)
	   {
	   	 $data=array("tagid"=>$sid);
	   	  $this->cm->deletetag($data);
  redirect("admin/Category/loadalltagsbysubcatid/$cid");
	   }

	   public function loadedittag($id)
	   {
	   	$data=array("tagid"=>$id);

       $temp=array(
			"taginfo"=>$this->cm->selecttagbysubcatid($data));
	   		$this->load->view('admin/updatetag',$temp);
	   	}

	   	public function edittag($id,$sid)
	{                 
		$where=array("tagid"=>$id
			);
		$newdata=array("tagname"=>$this->input->post('txttagname'));
		$this->cm->updatetag($newdata,$where);
		  redirect("admin/Category/loadalltagsbysubcatid/$sid");

	}
}

?>
