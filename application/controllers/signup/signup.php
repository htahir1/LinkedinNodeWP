<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signup extends CI_Controller{
function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('username')){
			redirect('common/settings', 'refresh');
		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header',$data);
			//$this->load->view('loginView/login_view', $data)
			$this->load->view('myview/screen-4.php',$data);
}


}

public function signuping(){

$this->load->model('signup_model');
		// Validate the user can login
		$result = $this->signup_model->validate();
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area


			redirect('signup/signup/process2', 'refresh');
		}		
	}




	public function process2(){


$this->load->view('common/header2.php');
$this->load->view('signupsviews/signupprocess2.php');

}




public function process3(){

$this->load->view('common/header2.php');
$this->load->view('signupsviews/signupprocess3.php');


}

public function process4(){
	$this->load->view('common/header2.php');
	$this->load->view('signupsviews/signupprocess7.php');





}

public function process5(){
	$this->load->view('common/header2.php');
	$this->load->view('signupsviews/signupprocess8.php');





}
public function process6(){
	$this->load->view('common/header2.php');
	$this->load->view('signupsviews/signupprocess9.php');



}

public function process7(){
	$this->load->view('common/header2.php');
	$this->load->view('signupsviews/signupprocess11.php');




}


}



?>