<?php
class Mennyiseg extends CI_Model{

public function __construct()
	{
	$this->load->database();

	}

public function items()
	
{
	$q = $this->db->query('select * from mennyiseg');
	return 	$q;
	}

public function insert($name){
	$q = $this->db->query('insert into mennyiseg  values (null,"'. $name.'")');
	}

public function del($id){
	$q = $this->db->query('delete from mennyiseg where id='.$id);
	}
	
	}


?>
