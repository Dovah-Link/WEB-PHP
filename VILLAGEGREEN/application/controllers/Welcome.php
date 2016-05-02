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
		$pays = $this->input->post('PaysClients');
		$cp = $this->input->post('CodePostalClients');
		$types = $this->input->post('TypesClients');

		try
		{

			/*$requete = $this->db->query("UPDATE clients 
										SET NomClients=?, PrenomClients=?, AdresseLivraisonClients=?, MailClients=?, VilleClients=?, PaysClients=?, CodePostalClients=?, TypesClients=?
										WHERE NomClients=?",array($nom,$prenom,$adrs,$mail,$ville,$pays,$cp,$types));
			$requete->execute();
			redirect(site_url("welcome/index"));*/

			$requete = $this->db->query("UPDATE clients 
										SET NomClients=?, PrenomClients=?, AdresseLivraisonClients=?, MailClients=?, VilleClients=?, PaysClients=?, CodePostalClients=?, TypesClients=?
										WHERE NomClients=?",array($nom,$prenom,$adrs,$mail,$ville,$pays,$cp,$types,$nom));
			redirect(site_url("welcome/index"));
			

		}
		catch( Exception $e)
		{
			echo $e;
		}
		redirect(site_url("welcome/index"));
	}
	public function login()
	{
		$this->load->database();
		$this->load->helper("url");

		$mail = $this->input->post('login');
		$nom = $this->input->post('mdp');
		$modele["loger"] = $this->db->query("SELECT * FROM clients WHERE NomClients = ? AND MailClients = ?",array($nom,$mail))->result();
		if($modele["loger"]==null)
		{
			$this->load->view('accueil');
		}
		else
		{
			$this->load->view('modif',$modele);
		}
	}
}

