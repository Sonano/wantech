<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->model('MLogin');
  }

  public function login()
  {
    $this->MLogin->cek();
  }

  public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin','refresh');
	}

}
