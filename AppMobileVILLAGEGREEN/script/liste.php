<?php 
		header('Content-Type: application/json');
	
		$mot = $_GET["query"];
		$db = new PDO("mysql:host=localhost;dbname=villagegreen;charset=utf8", "root", "");
		$requete = $db->query("select * from produits where NomProduits like '%$mot%'");
		
		$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
		//var_dump($tableau);
		echo json_encode($tableau); 
?>