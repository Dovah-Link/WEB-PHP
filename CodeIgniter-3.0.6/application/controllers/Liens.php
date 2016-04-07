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

	public function insert()
	{
		$this->load->database();
		$this->load->helper("url");

		$titre = $this->input->post("titre");
		$description = $this->input->post("description");
		$url = $this->input->post("url");
		$webm =  $this->input->post("webm");
		$theme = strtolower($this->input->post("theme"));
		$date = date('Y-m-d');
		$affichage =  $this->input->post("affichage");

		try
		{
			$this->db->query("INSERT INTO liens(titre, webmaster, description, url, theme, date, affichage) 
				  			  VALUES (?, ?, ?, ?, ?, ?, ?)", array($titre, $webm,$description,$url,$theme,$date,$affichage));
			echo "<script>alert(\"YES !\")</script>"; 
		}
		catch( Exception $e)
		{
			echo "<script>alert(\"NOP\")</script>"; 
		}


		redirect(site_url("liens/index"));
	}

	public function update($id)
	{
		$this->load->database();
		$this->load->helper("url");

		$titre = $this->input->post("titre");
		$description = $this->input->post("description");
		$url = $this->input->post("url");
		$webm =  $this->input->post("webm");
		$theme = strtolower($this->input->post("theme"));
		$date = date('Y-m-d');
		$affichage =  $this->input->post("affichage");

		$requete = $this->db->query('UPDATE liens set titre=?,webmaster=?,description=?,url=?,theme=?,date=?,affichage=? WHERE id='.$id, array($titre, $webm,$description,$url,$theme,$date,$affichage));
		redirect(site_url("liens/index"));
	}


	public function delete($id)
	{
		$this->load->database();
		$this->load->helper("url");

		$requete = $this->db->query('DELETE FROM liens WHERE id='.$id);
		redirect(site_url("liens/index"));
	}

	public function form()
	{
		$this->load->database();
		$this->load->helper("url");

		$this->load->view('form');
	}

	public function formModif($id)
	{
		$this->load->database();
		$this->load->helper("url");
		$requete = $this->db->query('SELECT * FROM liens WHERE id='.$id);
		$model["row"] = $requete->row();
		$this->load->view('formForModif', $model);

	}
}

