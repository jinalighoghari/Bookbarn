<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("UserM","um");
		$this->load->library('cart');
		
	}

	public function index()
	{
		$this->load->view("login");
	}

	public function validateLogin()
	{
		$data=array(
			"username"=>$this->input->post('txtuname'),
			"userpassword"=>$this->input->post('txtpwd')
		);
		$loggedData=$this->um->selectLoginData($data);

		if(count($loggedData)>0)
		{
			$_SESSION['uid']=$loggedData[0]->userid;
			$_SESSION['uname']=$loggedData[0]->username;
			$_SESSION['propic']=$loggedData[0]->userimageurl;
			redirect("Home");
		}
		else
		{
			$temp=array("loginErr"=>"Invalid Username or Password");
			$this->load->view('login',$temp);
		}
	}

	public function loadReg()
	{
		$temp=array(
			"states"=>$this->um->selectAllStates()
		);
		$this->load->view("reg",$temp);
	}

	public function registerUser()
	{
		$pwd=$this->input->post("txtpwd");
		$cpwd=$this->input->post("txtcpwd");
		$data=array(
			"username"=>$this->input->post('txtuname')
			
		);
		$loggedData=$this->um->selectLoginData($data);
		if (count($loggedData)>0) 
		{
			$temp=array("states"=>$this->um->selectAllStates(),
				"UsernameErr"=>"Username already exist!! Choose Diffrent  ");
			$this->load->view('reg',$temp);
		}
		else
		{
			if($pwd==$cpwd)
			{

			$img=$_FILES['fup']['name'];
 			copy($_FILES['fup']['tmp_name'], "C:/wamp64/www/bookbarns/resources/shared/images/".$img) or die($_FILES['fup']['error']);
			$data=array(
			"username"=>$this->input->post('txtuname'),
			"firstname"=>$this->input->post('txtfname'),
			"lastname"=>$this->input->post('txtlname'),
			"useremailid"=>$this->input->post('txtemail'),
			"contactno"=>$this->input->post('txtcon'),

			"userpassword"=>$this->input->post('txtpwd'),
			
			"cityid"=>$this->input->post('txtcity'),
			"stateid"=>$this->input->post('txtstate'),
			"userimageurl"=>$img
				);
			$this->um->insertUser($data);
			redirect("User/index");
			}
			else
		{
			$temp=array(
				"states"=>$this->um->selectAllStates(),
				"PassErr"=>"Confirm Password must be same");
			$this->load->view('reg',$temp);
		}

		}

}

	public function loadCityByStateId($sid)
	{
		$data=array("stateid"=>$sid);
		$cities=$this->um->selectCityByStateId($data);

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

	public function logout()
	{
		session_destroy();
		redirect("Home");
	}
}
?>