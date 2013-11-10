<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class search extends CI_Controller{
		function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('username')){
			$this->load->model('signup_model');
		// Validate the user can login
		$id = $this->signup_model->getProfileImage();
			
				$data["pic_url"]='uploads/30_'.$id.'.jpg';
				//$another=base_url();
				//$anotherData='http://'.$another.$data["pic_url"];

				
				$data["list"]=NULL;


			$this->load->view('common/header');
			$this->load->view('search/main_search.php',$data);
		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header');
			//$this->load->view('loginView/login_view', $data)
			$this->load->view('myview/default_main_page.php');
		}
		//$this->load->view('common/footer',$data);
	}
public function findAlumnai(){


$this->load->helper('url');

		if($this->session->userdata('username')){
				$this->load->model('signup_model');
		// Validate the user can login
$id = $this->signup_model->getProfileImage();

				$data["pic_url"]='uploads/30_'.$id.'.jpg';
				//$another=base_url();
				//$anotherData='http://'.$another.$data["pic_url"];

				



			$this->load->view('common/header');
			$this->load->view('search/find_Alumni.php',$data);
		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header');
			//$this->load->view('loginView/login_view', $data)
			$this->load->view('myview/default_main_page.php');
		}




}


public function search_keyword(){

$this->load->helper('url');

		if($this->session->userdata('username')){
		$this->load->model('signup_model');
		// Validate the user can login
$id = $this->signup_model->getProfileImage();

					$data["pic_url"]='uploads/30_'.$id.'.jpg';
				//$another=base_url();
				//$anotherData='http://'.$another.$data["pic_url"];
		}
				
		$this->load->model('search_model');
		
		$model_data = $this->search_model->search_main();
	
		if($model_data!=NULL){
			// If user did not validate, then show them login page again
			 /*foreach ($data as $row)
  			 {
  			 	echo $row->fname;
  			 	echo $row->lname;
  			 	echo $row->userid;
  			 	
  			 }*/
  			 $data['list'] = $model_data;
  			 $this->load->view('common/header');
		     $this->load->view('search/main_search.php',$data);
		}else{
			
			//redirect('search/search_keyword', 'refresh');
			echo 'No results found';
		}		
}

public function display_waiting_connections(){

$this->load->model('search_model');
		
		$model_data = $this->search_model->search_main();
	
		if($model_data!=NULL){
			// If user did not validate, then show them login page again
			 /*foreach ($data as $row)
  			 {
  			 	echo $row->fname;
  			 	echo $row->lname;
  			 	echo $row->userid;
  			 	
  			 }*/
  			 $data['list'] = $model_data;
  			 $this->load->view('common/header');
  			 $this->load->view('search/friends_add_list.php',$data);
		}else{
			
			echo 'No results found';
		}		
}




public function redirecttoconfirm(){

$choice = $this->input->post('addignore');
	if($choice != 'Connect')
	{
		
		$data['friendid'] = $choice;
		$data['fname'] = $this->session->userdata('fname');

		$this->load->model('search_model');
		$model_data = $this->search_model->uploader();
		$data['connection_data'] = $model_data;

		$this->load->view('common/header.php');
		$this->load->view('search/confirmadd.php',$data);
		//echo var_dump($_POST);

		
	}
	else
	{

	}
}

public function friendadded(){
	
	$this->load->model('search_model');

	if($this->search_model->add_friend())
	{
		$data['message'] = 'Added to network.';
	}
	else
	{
		$data['message'] = 'Already connected. Cannot add.';
	}
		$this->load->view('common/header.php');
		$this->load->view('search/friendadded.php',$data);
}

}

?>
