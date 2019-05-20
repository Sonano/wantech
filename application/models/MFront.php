<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MFront extends CI_Model{

  public function get($table)
	{
		$q = $this->db->get($table);
		return $q->result_array();
	}

	public function getbyid($table, $where)
	{
		$q = $this->db->get_where($table, $where);
		return $q->row_array();
	}

}
