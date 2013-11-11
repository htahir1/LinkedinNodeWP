<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include( 'function.php');
require_once 'google-api-php-client/src/Google_Client.php';
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





public function imagePage(){
	$this->load->helper('url');
$this->load->model('signup_model');
$this->signup_model->processp1();

$this->load->view('common/header2.php');
$this->load->view('signupsviews/uploadpic.php');



}




public function processpp(){

	$max_file_size = 10240*10240; // 200kb
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail sizes
$sizes = array(30 => 30,100 => 100);


if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['image'])) {
	if( $_FILES['image']['size'] < $max_file_size ){
		// get file extension
		$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
		if (in_array($ext, $valid_exts)) {
			$_FILES['image']['name']=$this->session->userdata('userid').'.jpg';
			$this->load->model('signup_model');
			$this->signup_model->uploader1();
			foreach ($sizes as $w => $h) {
				$files[] = resize($w, $h);
			
			}
			
		redirect('signup/signup/process3', 'refresh');

		} else {
			$msg = 'Unsupported file';
		}
	} else{
		$msg = 'Please upload image smaller than 200KB';
	}
}
else{
echo "not success";

}














	




}



public function process3(){

	
	
$data['username']=$this->session->userdata('username');
$this->load->view('common/header2.php');
$this->load->view('signupsviews/signupprocess3.php',$data);



}


public function process4(){


	
	$this->load->view('common/header2.php');
	$this->load->view('signupsviews/signupprocess7.php');





}

public function process5(){



/*


//session_start();

$client = new Google_Client();
$client->setApplicationName('Google Contacts PHP Sample');
$client->setScopes("http://www.google.com/m8/feeds/");

 $client->setClientId('326511197769.apps.googleusercontent.com');
 $client->setClientSecret('7oEAJQyp3m8Zq40nUHXUKHuY');
 $client->setRedirectUri('http://localhost/we/index.php/signup/signup/process5');
$client->setDeveloperKey('AIzaSyCs5vIoJ759f0GNhm-MbFSlA3t0Uh2TOlY');

if (isset($_GET['code'])) {
  $client->authenticate();
  $_SESSION['token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
 $client->setAccessToken($_SESSION['token']);
}

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['token']);
  $client->revokeToken();
}

if ($client->getAccessToken()) {
  $req = new Google_HttpRequest("https://www.google.com/m8/feeds/contacts/default/full");
  $val = $client->getIo()->authenticatedRequest($req);

  // The contacts api only returns XML responses.
  $response = json_encode(simplexml_load_string($val->getResponseBody()));
  $rr=json_decode($response, true), true) ;

  // The access token may have been updated lazily.
  $_SESSION['token'] = $client->getAccessToken();
} else {
  $auth = $client->createAuthUrl();
}

  unset($_SESSION['token']);









*/



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
public function processgetContacts(){





}






}



?>