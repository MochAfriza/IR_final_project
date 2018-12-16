<?php 

class Mdl_artikel extends CI_Model{
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($table, $where, $data){
		$this->db->where($where)->update($table,$data);
	}	

	public function delete_by_id($id) {
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	function tampil() {
	$query=$this->db->get('artikel');
	if($query ->num_rows()>0){
		return $query->result();
	} else 
	{ return array();
	}
	}

	function per_id($id){
	$this->db->where('id',$id);
	$query=$this->db->get('artikel');
	return $query->result();
	}
}
