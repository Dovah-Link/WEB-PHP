<?php
		header('Content-Type: application/json');
	
		$id = $_GET["id"];
		$db = new PDO("mysql:host=localhost;dbname=villagegreen;charset=utf8", "root", "");
		$requete = $db->query("SELECT * from produits WHERE IDProduits='%id'");
		
		$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
		var_dump($tableau);
		echo json_encode($tableau); 
	
?>