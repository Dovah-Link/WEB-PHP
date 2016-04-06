<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class liens extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->load->helper("url");

		$requete = $this->db->query('SELECT * FROM liens');
		$model["liste"] = $requete->result();
		$this->load->view('liste', $model);
	}

	public function detail($id)
	{
		$this->load->database();
		$this->load->helper("url");

		$requete = $this->db->query('SELECT * FROM liens WHERE id='.$id);
		$model["row"] = $requete->row();
		$this->load->view('details', $model);
	}

/*	public function insert()
	{
		
	}*/

	

	public function delete($id)
	{
		$this->load->database();
		$this->load->helper("url");
		$requete = $this->db->query('DELETE FROM liens WHERE id='.$id);
		$requete->result();
		$this->load->view('details', $model);
	}

	public function Form()
	{
		$this->load->database();
		$this->load->helper("url");
		$this->load->view('form');
	}
}

