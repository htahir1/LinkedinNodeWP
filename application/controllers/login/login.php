<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('username')){
			redirect('search/search', 'refresh');
		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header',$data);
			$this->load->view('myview/default_main_page.php',$data);
		}
		//$this->load->view('common/footer',$data);
	}
	public function loggedin(){
		if($this->session->userdata('username')){
			redirect('search/search', 'refresh');
			
		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header',$data);
			//$this->load->view('loginView/login_view', $data)
			$this->load->view('myview/default_main_page.php',$data);
		}



	}
	
	public function doLogin($msg = NULL){

		$this->load->helper('url');

		if($this->session->userdata('username')){
			redirect('search/search', 'refresh');
		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header',$data);
			//$this->load->view('loginView/login_view', $data)
			$this->load->view('myview/loginScreen.php',$data);
		}



	}
	public function what(){
	$this->load->view('common/header');
		$this->load->view('myview/screen-3.php');



	}

	public function process(){
		// Load the model
		$this->load->model('login_model');
		// Validate the user can login
		$result = $this->login_model->validate();
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->doLogin($msg);
		}else{
			// If user did validate, 
			// Send them to members area

if($this->session->userdata('username')){
			redirect('search/search', 'refresh');
		}		
	}
}
	public function do_logout(){
		$this->session->sess_destroy();
		redirect('login/login','refresh');
	}



}
?>