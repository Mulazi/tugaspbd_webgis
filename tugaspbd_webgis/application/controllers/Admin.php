<?php

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(empty($this->session->userdata('id_admin'))){
			redirect('login/admin');
		}

	}
	public function index()
	{
		$datacontent['title']='Beranda';
		$data['content'] = $this->load->view('backend/content/beranda',$datacontent,TRUE);
		$data['title']='Welcome';
		$this->load->view('backend/index',$data);

    }
}