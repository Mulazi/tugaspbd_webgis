<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_account extends CI_model {

    // fungsi simpan data register
    public function simpan_register($data) {

        return $this->db->insert("users", $data);

    }

    function cek_register($username){
        $this->db->select('*');
        $this->db->from("users");
        $this->db->where('username', $username);
        $this -> db -> limit(1);
        $query = $this->db->get();
        if($query -> num_rows() == 1)
        {
          return $query->result();
        }
        else
        {
          return false;
        }

    }


    // fungsi cek login
    function cek_login($username, $password)
    {
    $this->db->select("*");
    $this->db->from("users");
    $this->db->where("username", $username);
    $query = $this->db->get();
    $user = $query->row();

    /**
     * Check password
     */
    if (!empty($user)) {

        if (password_verify($password, $user->password)) {

            return $query->result();

        } else {

            return FALSE;

        }

        } else {

        return FALSE;

        }
    }

    #UNTUK ADMIN

    function cek_login_admin($username, $password)
    {
    $this->db->select("*");
    $this->db->from("admin");
    $this->db->where("username", $username);
    $query = $this->db->get();
    $user = $query->row();

    /**
     * Check password
     */
    if (!empty($user)) {

        if (password_verify($password, $user->password)) {

            return $query->result();

        } else {

            return FALSE;

        }

        } else {

        return FALSE;

        }
    }
}