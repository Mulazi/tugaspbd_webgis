<?php

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(empty($this->session->userdata('username'))){
			redirect('login');
		}

		$this->load->view('frontend/v_main');
	}
	public function index()
	{
		
    }
}
?>