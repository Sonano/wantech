<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    if (!$this->session->userdata('username')) {
			redirect('admin','refresh');
		}
    $this->load->helper('text');
    $this->load->model('MEnd');
  }

  public function index()
	{
		$data['title']    = "Daftar Berita";
		$data['page']     = "admin/berita/databerita";
    $data['getNews']  = $this->MEnd->get('news');
		$this->load->view('admin/index', $data);
	}

	public function add()
	{
		$data['title']		= "Tambah Berita";
		$data['page']	    = "admin/berita/tambahberita";
		$this->load->view('admin/index', $data);
	}

	public function adding()
	{
		$table = 'news';
		$values	= $_POST;
		$this->MEnd->add($table, $values);
		redirect('admin/news','refresh');
	}

	public function update($news_id)
	{
		$table 			= 'news';
		$id 			= array('news_id'=>$news_id);
		$data['row']	= $this->MEnd->getbyid($table, $id);
		$data['title']	= "Ubah Berita";
		$data['page']	= "admin/berita/ubahberita";
		$this->load->view('admin/index', $data);
	}

	public function updating()
	{
		$table 	= 'news';
		$field 	= 'news_id';
		$id 	= $_POST['news_id'];
		$values	= $_POST;
		$this->MEnd->update($field, $id, $table, $values);
		redirect('admin/news','refresh');
	}

	public function delete($id)
	{
		$table 	= 'news';
		$field 	= 'news_id';
		$this->MEnd->delete($field, $id, $table);
		redirect('admin/news','refresh');
	}

}
