<?php 

class Mdl_artikel extends CI_Model{
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($table, $where, $data){
		$this->db->where($where)->update($table,$data);
	}	
}