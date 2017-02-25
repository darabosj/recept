<?php

class elso extends CI_Controller {

	public function index()
	{
		$this->load->view('elso');
	}
	public function data()
	{
		$this->load->database();
		$q = $this->db->query('select * from bevasarlas');
		foreach ($q->result() as $row){

		echo "<div>";
		echo $row->id. "\n\r";
		echo $row->datum . "\n\r";		
		echo "</div>";
		}

	}

}
