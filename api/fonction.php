<?php

function connexionDB()
{
	 // Paramètre de connexion serveur
 	$host = "localhost";
 	$login= "vince09"; // Votre loggin d'accès au serveur de BDD
 	$password="W9UCPD2V0F"; // Le Password pour vous identifier 	auprès du serveur
 	$base = "vince09"; // La bdd avec laquelle vous voulez 	travailler
 	try 
 	{
 		$db = new PDO('mysql:host=' . $host . ';charset=utf8;dbname='	 . $base,$login, $password);
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
	$requete = "SELECT * FROM Films ";
	$result = $db->query($requete);
	return $result;
}