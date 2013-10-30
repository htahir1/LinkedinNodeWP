<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include( 'function.php');

class upload_picture extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		// Load our view to be displayed
		// to the user




		$this->load->helper('url');

		if($this->session->userdata('username')){


				$id=$this->session->userdata('username');
				$data='uploads/'.$id.'.jpg';
				if(!file_exists($data)){
					$data='ulploads/default.jpg';



				}






			$this->load->view('common/header');
			$this->load->view('search/upload_picture.php',$data);
		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header');
			//$this->load->view('loginView/login_view', $data)
			$this->load->view('myview/default_main_page.php');
		}
		//$this->load->view('common/footer',$data);
	}


	public function uploader(){


$max_file_size = 1024*1024; // 200kb
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail sizes
$sizes = array(30 => 30);


if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['image'])) {
	if( $_FILES['image']['size'] < $max_file_size ){
		// get file extension
		$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
		if (in_array($ext, $valid_exts)) {
			$_FILES['image']['name']=$this->session->userdata('userid').'.jpg';
			foreach ($sizes as $w => $h) {
				$files[] = resize($w, $h);
			
			}
			
		redirect('search/search', 'refresh');

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



}

?>
