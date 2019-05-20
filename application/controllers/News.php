<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('MFront');
	}

	public function index()
	{
		if (!$this->uri->segment(1)) {
			redirect(base_url('news'));
		}
		$data['getNews'] = $this->MFront->get('news');
		$this->load->view('index', $data);
	}

	public function content($news_id)
	{
		$table 			= 'news';
		$id 			= array('news_id'=>$news_id);
		$data['row']	= $this->MFront->getbyid($table, $id);
		$this->load->view('konten', $data);
	}

}
