<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model("HomeM","hm");
		$this->load->model("HomeCategoryM","hcm");
	}
		

	public function index()
	{
 		 	$data=array("catname"=>"CookBooks");
            $books=$this->hm->selectAllBooks($data);
            $d2=array("catname"=>"Poetry");
            $poetrybook=$this->hm->selectAllBookspoetry($d2);
 		 	$temp=array("pbook"=>$poetrybook,
          		 "book"=>$books,
          		 "cat"=>$this->hm->selectallcategories()
				  );
 		 $this->load->view("home",$temp);	
	}


	public function loadsubcatbycat($cid)
	{
		$data=array("catid"=>$cid);
		$scats=$this->ab->selectSubCatByCatId($data);
		foreach ($scats  as $s) {
			?>
			<option value="<?php echo $s->subcatid?>"><?php echo $s->subcatname?></option>
			<?php
		}
	}

}
?>

