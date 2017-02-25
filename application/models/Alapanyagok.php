<?php
class Alapanyagok extends CI_Model{

public function __construct()
	{
	$this->load->database();

	}

public function items(){
	$q = $this->db->query('select alapanyagok.id, alapanyagok.nev, mennyiseg.meny from alapanyagok left join mennyiseg on alapanyagok.menny_id = mennyiseg.id');
	return 	$q;

	}

public function insert($nev, $menny_id){
	$q = $this->db->query('insert into alapanyagok(nev, menny_id) values ("'.$nev .'",'.$menny_id.')');
	}

public function del($id){
	$q = $this->db->query('delete from alapanyagok where id='.$id);
	}
	
	}


?>
