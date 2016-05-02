<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller 
{
	public function index()
	{
		$this->load->helper("url");
		$this->load->database();
		$modele["catalogue"] = $this->db->query("SELECT LibelleRubrique FROM rubrique")->result();
		$this->load->view('accueil',$modele);

	}
	public function inscription()
	{
		$this->load->helper("url");
		$this->load->database();
		$modele["catalogue"] = $this->db->query("SELECT LibelleRubrique FROM rubrique")->result();
		$this->load->view('register',$modele);
	}
	public function insert()
	{
		$this->load->database();
		$this->load->helper("url");

		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$adrs = $this->input->post('adrs');
		$cp = $this->input->post('cp');
		$ville = $this->input->post('ville');
		$pays = strtoupper($this->input->post('pays'));
		$types = $this->input->post('types');
		$mail = $this->input->post('mail');

		try
		{
			$requete = $this->db->query("INSERT into clients
														(NomClients,PrenomClients,AdresseLivraisonClients,TypesClients,
														MailClients,CodePostalClients,VilleClients,PaysClients) 
									 VALUES (?,?,?,?,?,?,?,?)",array($nom,$prenom,$adrs,$types,$mail,$cp,$ville,$pays));
			$this->load->view('accueil');
		}
		catch( Exception $e)
		{
			echo "<script>alert(\"Une erreur est survenue, veuillez recommencer !\")</script>"; 
		}

	}
	public function client()
	{
		$this->load->database();
		$this->load->helper("url");

		$modele["listeCli"] = $this->db->query("SELECT * FROM clients")->result();
		$this->load->view('modif',$modele);
	}
	public function update()
	{
		$this->load->database();
		$this->load->helper("url");

		$nom = $this->input->post('NomClients');
		$prenom = $this->input->post('PrenomClients');
		$adrs = $this->input->post('AdresseLivraisonClients');
		$mail = $this->input->post('MailClients');
		$ville = $this->input->post('VilleClients');

		try
		{

			$requete = $this->db->query("UPDATE clients 
										set NomClients=?, PrenomClients=?,AdresseLivraisonClients=?,MailClients=?, VilleClients=? 
										WHERE NomClients=?",array($nom,$prenom,$adrs,$mail,$ville,$nom));
			$this->load->view('accueil');
		}
		catch( Exception $e)
		{
			echo "<script>alert(\"Une erreur est survenue, veuillez recommencer !\")</script>"; 
		}
	}
}
