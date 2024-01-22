<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class BMoreInfo extends CI_Controller
{
		public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/AHomeM","hm");
		
	}
	public function index($id)
	{
		$data=array("bookid"=>$id);
		$temp=array(

        "books"=>$this->hm->moreinfo($data),
        "comments"=>$this->hm->loadCommentByBookId($data),
        "likers"=>$this->hm->bookLikers($data)

		);
		$this->load->view("admin/bmoreinfo",$temp);
	}
}

?>
