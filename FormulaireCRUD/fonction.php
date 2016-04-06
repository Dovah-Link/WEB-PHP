<?php

	function connexionDB()
	{
		 // Paramètre de connexion serveur
		 $host = "localhost";
		 $login= "root"; // Votre loggin d'accès au serveur de BDD
		 $password=""; // Le Password pour vous identifier auprès du serveur
		 $base = "sites"; // La bdd avec laquelle vous voulez travailler
		 try 
		 {
		 	$db = new PDO('mysql:host=' . $host . ';charset=utf8;dbname=' . $base,$login, $password);
		 	return $db;
		 } 
		 catch (Exception $e) 
		 {
			 print 'Erreur : ' . $e->getMessage() . '<br />';
			 print 'N° : ' . $e->getCode();
			 die("Connexion au serveur impossible.");
		 }
	}

	function liste()
	{
		$db = connexionDB(); // Appel de la fonction de connexion
		$requete = "SELECT id,titre,url FROM liens WHERE affichage='oui' ORDER BY id ";
		$result = $db->query($requete);
		return $result;
	}

	function AffDetail()
	{
		$db = connexionDB();// Appel de la fonction de connexion
		$id=$_GET["id"];
		$str_requete = "SELECT * FROM liens WHERE id=".$id;
		$result = $db->query($str_requete);

		 // Renvoi de l'enregistrement sous forme d'un objet
		$lien = $result->fetch(PDO::FETCH_OBJ);
		return $lien;
	}
?>