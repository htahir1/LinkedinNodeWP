<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class signup_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}



	public function uploader1(){

		$usrid=$this->session->userdata('userid');
		


	



$d = array(
				'imageUrl' => $this->session->userdata('userid'),
				'userId' => $this->session->userdata('userid')

			);
$this->db->where('userId', $usrid);
	$query = $this->db->get('profileimage');
if($query->num_rows == 1)
		{
			return;


		}
		else{


	$this->db->insert('profileimage' , $d);



		}




	}


	public function getProfileImage(){
		$usrid=$this->session->userdata('userid');
		$this->db->where('userId', $usrid);
	$query = $this->db->get('profileimage');
	if($query->num_rows == 1)
		{
			$row = $query->row();
			$imagepath=$row->imageUrl;
			return $imagepath;

}

return "default";

}
	

public function validate(){
		// grab user input
		$username = $this->security->xss_clean($this->input->post('email'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$firstname=$this->security->xss_clean($this->input->post('firstName'));
		$lastname=$this->security->xss_clean($this->input->post('lastName'));
		// Prep the query
		$this->db->where('username', $username);
		//$this->db->where('password', $password);
		
		// Run the query
		$query = $this->db->get('users');
		// Let's check if there are any results

		if($query->num_rows == 1)
		{
			// If there is a user, then create session data
			return false;
		
		}



$data = array(
				'fname' => $this->input->post('firstName'),
				'lname' => $this->input->post('lastName'),
				'username' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);
		
			$this->db->insert('users' , $data);




		$this->db->where('username', $username);
		$this->db->where('password', $password);
		
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


}






		// If the previous process did not validate
		// then return false.
		return true;
	}


public function processp1(){

		$countryCode = $this->security->xss_clean($this->input->post('countryCode'));
		$postalCode = $this->security->xss_clean($this->input->post('postalCode'));
		$statuschooser=$this->security->xss_clean($this->input->post('status-chooser'));
		$JobTitle=$this->security->xss_clean($this->input->post('JobTitle'));
		$company=$this->security->xss_clean($this->input->post('company'));
		$id=$this->session->userdata('userid');
		$lang='english';
		$YearsOfExperience=0;
		$date =date("Y-m-d");
		$data=array(
			'userId'=>$id,
	
			'country'=>$this->input->post('countryCode'),
			'PostalCode'=>$this->input->post('postalCode'),
			'currentStatus'=>$this->input->post('status-chooser'),
			'language'=>$lang,
			'YearsOfExperience'=>$YearsOfExperience,
			'DOB'=>$date,
			'joiningDate'=>$date,





			);
		$this->db->insert('profile' , $data);

//if($statuschooser=="")






}

}


?>