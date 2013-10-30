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
			$id=$this->session->userdata('userid');
				$data["pic_url"]='uploads/'.$id.'.jpg';
				//$another=base_url();
				//$anotherData='http://'.$another.$data["pic_url"];

				



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
			$id=$this->session->userdata('userid');
				$data["pic_url"]='uploads/'.$id.'.jpg';
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


}

?>
