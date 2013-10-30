<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class signup_model extends CI_Model{
	function __construct(){
		parent::__construct();
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
}
?>