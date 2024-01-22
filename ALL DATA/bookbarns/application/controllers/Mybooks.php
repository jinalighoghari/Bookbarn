<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mybooks extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("MybooksM","mb");
		$this->load->library('cart');
		if(!isset($_SESSION['uname']))
		{
			redirect("User");
		}

	}
	public function index()
	{


		$data=array("u.userid"=>$_SESSION['uid']);
		
		$temp=array(
				"books"=>$this->mb->selectMyBooks($data),
				 "cat"=>$this->mb->selectallcategories()
			);

		$this->load->view("mybooks",$temp);
	}

	
	public function loadeditbook($id)
	{

		$data=array("bookid"=>$id);
		$temp=array(
			"bookinfo"=>$this->mb->selectbookinfo($data),
			"states"=>$this->mb->selectAllStates(),
			"cat"=>$this->mb->selectallcategories()
		);
		$this->load->view("editbook",$temp);
	}


	public function editbasic($bid)
	{

		$data=array(
                "bookname"=>$this->input->post('txtbk'),
                "authorname"=>$this->input->post('txtathr'),
                "isbn"=>$this->input->post('isbn'),
                "price"=>$this->input->post('prc'),
                "bookcondition"=>$this->input->post('txtcon'),
                "description"=>$this->input->post('txtbdec'),
                "cityid"=>$this->input->post('txtcity'),
                "catid"=>$this->input->post('txtcat'),
                "subcatid"=>$this->input->post('txtsubcat'),
                "status"=>$this->input->post('txtstatus'),
                "edition"=>$this->input->post("txted")
			);
		$where=array("bookid"=>$bid);
		$this->mb->updatebookinfo($data,$where);
		$tags=$this->input->post('txtTags');
	foreach ($tags as $t) {
		$d2=array(
			"bookid"=>$bid,
			"tagid"=>$t
			);
	
		$this->mb->insertbookTag($d2);
	}
		redirect("Mybooks");

	}

 	
 	public function editImage($bid)
  	{

    if($_FILES['fup']['name']!="")
    {

    	$file='';
	$img='';
	$file_tmp ='';
	$location = "C:/wamp64/www/bookbarns/resources/shared/images/";
	foreach ($_FILES['fup']['name'] as $key => $val) 
	{
		$file=$_FILES['fup']['name'][$key];
		$file_tmp=$_FILES['fup']['tmp_name'][$key];
		move_uploaded_file($file_tmp,$location.$file);
		$img .=$file." ";
	}
	  $where=array("bookid"=>$bid);
      $data=array("image"=>$img);
      $this->mb->updatebookinfo($data,$where);

    }
	redirect("Mybooks");
  	}
  
	
	public function loadsubcatbycat($cid)
	{
		$data=array("catid"=>$cid);
		$scats=$this->mb->selectSubCatByCatId($data);

		echo "<option value=-1>Select a Subcat</option>";
		foreach ($scats  as $s) {
			?>
			<option value="<?php echo $s->subcatid?>"><?php echo $s->subcatname?></option>
			<?php
		}
	}
	

	public function loadTagbyid($sid)
	{
				$data=array("subcatid"=>$sid);
		$tags=$this->mb->selectTagbyId($data);
		foreach ($tags  as $t) {
			?>
			<input type="checkbox"  name="txtTags[]" value="<?php echo $t->tagid?>"><?php echo $t->tagname?>
			<?php
		}
	}


	public function loadCityByStateId($sid)
	{
		$data=array("stateid"=>$sid);
		$cities=$this->mb->selectCityByStateId($data);

		echo "<option value=-1>Select City</option>";

		foreach ($cities as $c) {
		?>
		<option value="<?php echo $c->cityid ?>"><?php echo $c->cityname ?></option>
		<?php
		}
	}

}
?>