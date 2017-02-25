<?php
class Listak extends CI_Model{

public function __construct()
	{
	$this->load->database();

	}
public function lista_items(){
	$q = $this->db->query('select *  from lista ;');
	return 	$q;	
	}

public function items($id){
	$q = $this->db->query('select listak.id, listak.lista_id  from listak where lista_id = '. $id);
	return 	$q;

	}

public function insert($nev, $menny_id){
	$q = $this->db->query('insert into lista(nev, menny_id) values ("'.$nev .'",'.$menny_id.')');
	}
	
public function new_lista($lista_id,$alapanyag_id, $menny){
	$his->db->query('insert into listak(lista_id,alapanyag_id, menny) values('.$lista_id.',"'.$alapanyag_id.'",'.$menny.')');
	}

public function del($id){
	$q = $this->db->query('delete from lista where id='.$id);
	}
	
	}


?>
