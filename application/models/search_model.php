<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Search_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function search_main(){
		// grab user input
		
		$firstName = $this->security->xss_clean($this->input->post('firstName'));
		$lastName = $this->security->xss_clean($this->input->post('lastName'));
		$company=$this->security->xss_clean($this->input->post('company'));
		$school=$this->security->xss_clean($this->input->post('school'));
		
		if($firstName != '')
		{	
			// Prep the query
			$this->db->where('fname', $firstName);
			
		}
		if($lastName != '')
		{	
			// Prep the query
			$this->db->where('lname', $lastName);
			
		}
		if($company != '')
		{	
			// Prep the query
			$this->db->where('company', $company);
			
		}
		if($school != '')
		{	
			// Prep the query
			$this->db->where('school', $school);
			
		}
		$query = $this->db->get('users');
			// Let's check if there are any results
			if($query->num_rows >= 1)
			{
			    return $query->result();
			   
			}
			return NULL;
		
		
	}

	public function get_add_friend(){

		$id = $this->input->post('addignore');
		$this->db->where('userid', $id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)
		{
			return $query->row(1);
		}
		
	}
	public function add_friend(){

		//echo 'THE ID IS '.$this->input->post('userid');
		
		
		$friendid = $this->input->post('userid');
		$userid = $this->session->userdata('userid');
		
		
	//	echo $this->input->post('userid');
		$data = array(
			'userId1' => $userid,
			'userId2' => $friendid
		);
		if($this->db->insert('requests', $data))
		{
			return true;
		}
		return false;
		
		
	}
}
?>