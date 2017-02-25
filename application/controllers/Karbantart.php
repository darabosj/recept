<?php

class karbantart extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('karbantart');
		$this->load->view('footer');
	}
	public function mennyiseg()
	{
		$this->load->model('mennyiseg');
		$this->load->helper('form');

		$d= $this->input->post("r");
		$s= $this->input->post("submit");
		if ($this->input->post('del')=='Töröl')
			foreach($d as $id){
			$this->mennyiseg->del($id);
			}
		if ($this->input->post('new')=='Uj'){

			$this->mennyiseg->insert($this->input->post('nev'));		
		}		

		$q = $this->mennyiseg->items();
		$this->load->view('header');
		$this->load->view('karbantart/mennyiseg',['data' => $q]);
		$this->load->view('footer');
	}

	public function bevasarlas()
	{
		$this->load->database();
		$q = $this->db->query('select * from bevasarlas');
		$this->load->view('header');
		$this->load->view('karbantart/bevasarlas',['data' => $q ]);	
		$this->load->view('footer');
	}

	public function alapanyagok()
	{
		$this->load->helper('form');
		$this->load->model('alapanyagok');
		$this->load->model('mennyiseg');
		$m = $this->mennyiseg->items();
		$d= $this->input->post("r");
		$s= $this->input->post("submit");
		if ($this->input->post('del')=='Töröl')
			foreach($d as $id){
			$this->alapanyagok->del($id);
			}
		if ($this->input->post('new')=='Uj'){

			$this->alapanyagok->insert($this->input->post('nev'),$this->input->post('v'));		
		}		
		
		
		
		$q = $this->alapanyagok->items();
		$this->load->view('header');
		$this->load->view('karbantart/alapanyagok',['data' => $q, 'm' => $m ]);	
		$this->load->view('footer');
	}

	public function listak()
	{
		$this->load->model('listak');
		$this->load->helper('form');
		$q = $this->listak->lista_items();
		$this->load->view('header');
		$this->load->view('karbantart/lista',['data' => $q]);	
		$this->load->view('footer');
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
