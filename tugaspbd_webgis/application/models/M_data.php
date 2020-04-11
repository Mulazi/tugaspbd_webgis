<?php 
 
class M_data extends CI_Model{
	function get_admin(){
		return $this->db->get('admin');
	}
}