<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model{

  public function cek()
	{
		$users['username'] = $_POST['username'];
		$users['password'] = md5($_POST['password']);
		$users['status'] = '1';
		$row = $this->db->get_where('users', $users);


		if ($row->num_rows() == 1) {
      $data = $row->row_array();
			$this->session->set_userdata( $data );
			redirect('admin','refresh');
		}else {
			$this->session->set_flashdata('msg', 'Username atau Password anda salah!');
			redirect('admin','refresh');
		}
	}

}
