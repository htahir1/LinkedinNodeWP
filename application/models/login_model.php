<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function upload_photo($photo){


$id=$this->session->userdata('userid');
$this->db->where('userid',$id);

  $this->db->set('profileUrl',$photo);


	}
	
	public function validate($usr=NULL,$pass=NULL){
		// grab user input
		if($usr==NULL && $pass==NULL)
		{
		$username = $this->security->xss_clean($this->input->post('lEmail'));
		$password = $this->security->xss_clean($this->input->post('lPassword'));
		}
		else{
			$username=$usr;
			$password=$pass;
			$usr=NULL;
			$pass=NULL;



		}


		// Prep the query
		$this->db->where('username', $username);
		//$this->db->where('password', $password);
		
		// Run the query
		$query = $this->db->get('users');
		// Let's check if there are any results
		if($query->num_rows == 1)
		{
			// If there is a user, then create session data
			$row = $query->row();
			$data = array(
					'userid' => $row->userid,
					'fname' => $row->fname,
					'lname' => $row->lname,
					'username' => $row->username,
					'validated' => true
					);
			$this->session->set_userdata($data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}
}
?>