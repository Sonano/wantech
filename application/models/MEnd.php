<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MEnd extends CI_Model{

  public function get()
	{
		$this->db->select('*');
        $this->db->from('news n');
        $this->db->join('users u', 'n.user_id = u.user_id', 'left');
        $this->db->order_by('n.news_id', 'asc');
		$q = $this->db->get();
		return $q->result_array();
	}
  
	public function add($table,$object)
	{
		$this->db->insert($table, $object);
	}

	public function getbyid($table, $where)
	{
		$q = $this->db->get_where($table, $where);
		return $q->row_array();
	}

	public function update($field, $where, $table, $object)
	{
		$this->db->where($field, $where);
		$this->db->update($table, $object);
	}

	public function delete($field, $where, $table)
	{
		$this->db->where($field, $where);
		$this->db->delete($table);
	}

	public function log($table)
	{
		$this->db->order_by('post_time', 'desc');
		$q = $this->db->get($table);
		return $q->result_array();
	}

}
