<?php
		header('Content-Type: application/json');
	
		$id = $_GET["query"];
		$db = new PDO("mysql:host=localhost;dbname=villagegreen;charset=utf8", "root", "");
		$requete = $db->query("SELECT * FROM produits WHERE IDProduits='$id'");
		
		$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
		//var_dump($tableau);
		echo json_encode($tableau); 
	
?>