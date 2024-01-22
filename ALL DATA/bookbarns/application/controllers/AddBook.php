<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AddBook extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model("AddBookM","ab");
		
		if(!isset($_SESSION['uname']))
		{
			redirect("User");
		}

	}

	public function loadAddBook()
	{
		

		$temp=array(
       "cat"=>$this->ab->selectallcategories(),
       "states"=>$this->ab->selectAllStates()

			);
		$this->load->view('addbooks',$temp);
	}
	
	public function loadTagbyid($sid)
	{
				$data=array("subcatid"=>$sid);
		$tags=$this->ab->selectTagbyId($data);
		foreach ($tags  as $t) {
			?>
			<input type="checkbox"  name="txtTags[]" value="<?php echo $t->tagid?>"><?php echo $t->tagname?>
			<?php
		}
	}

public function addbook()
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
	
	$data=array(
			"bookname"=>$this->input->post("txtbk"),
			"image"=>$img,
			"authorname"=>$this->input->post("txtathr"),
			"bookcondition"=>$this->input->post("txtcon"),
			"price"=>$this->input->post("prc"),
			"description"=>$this->input->post("txtbdec"),
			"isbn"=>$this->input->post("isbn"),
			"userid"=>$_SESSION['uid'],
			"catid"=>$this->input->post("txtcat"),
			"subcatid"=>$this->input->post("txtsubcat"),
			"cityid"=>$this->input->post("txtcity"),
		    "language"=>$this->input->post("txtlan"),
		    "edition"=>$this->input->post("txted")
		    

			);
	$bid=$this->ab->insertBookByID($data);
	$tags=$this->input->post('txtTags');
	foreach ($tags as $t) {
		$d2=array(
"bookid"=>$bid,
"tagid"=>$t
			);
		$this->ab->insertbookTag($d2);
	}
	redirect('Mybooks');
}

public function removebook($id)
	{
		$data=array("Bookid"=>$id);
		$this->ab->deletebook($data);
		redirect("MyBooks");
	}


	public function loadCityByStateId($sid)
	{
		$data=array("stateid"=>$sid);
		$cities=$this->ab->selectCityByStateId($data);

		echo "<option value=-1>Select City</option>";

		foreach ($cities as $c) {
		?>
		<option value="<?php echo $c->cityid ?>"><?php echo $c->cityname ?></option>
		<?php
		}
	}

	public function loadsubcatbycat($cid)
	{
	

		$data=array("catid"=>$cid);

		
		$scats=$this->ab->selectSubCatByCatId($data);


echo "<option value=-1>Select a Subcat</option>";
		foreach ($scats  as $s) {
			?>
			<option value="<?php echo $s->subcatid ?>"><?php echo $s->subcatname?></option>
			<?php
		}
	}
}
?>