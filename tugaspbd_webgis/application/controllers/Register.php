<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    

    public function index()
    {
        //load view form register
        $this->load->view('frontend/account/v_register');
    }

    public function simpan()
    {
        //load model M_user
        $this->load->model('M_account');

        // $username = $this->input->post('username');
        // $cek = $this->m_account->cek_register($username);

                $data = array(
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),    
                );
        
        
                //insert data via model
                $register = $this->M_account->simpan_register($data);
        
                //cek apakah data berhasil tersimpan
                if($register) {
        
                    echo "success";
        
                } else {
                    echo "error";
                }
           

    }

}