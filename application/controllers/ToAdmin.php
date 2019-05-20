<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ToAdmin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
  }

  function index()
  {
    if (!$this->session->userdata('username')) {
			$this->load->view('login');
		}else{
      $data['title']	= "Dashboard";
  		$data['page']		= "admin/welcome";
  		$this->load->view('admin/index', $data);
		}
  }

}
