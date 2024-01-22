 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class ManageprofileM extends CI_Model
{   
     public function selectadminInfo($data)
     {
     	return $this->db->where($data)->get('tbladmin')->result()[0];
     }

     public function updateadminInfo($data)
     {
     	$where=array("adminid"=>$_SESSION['uid']);
     	return $this->db->where($where)->update('tbladmin',$data);
     }
}
?>