<?php
header("Access-Control-Allow-Origin: *");


	require ("fonction.php");

		$id = $_GET['id'];

		$db = connexionDB();

		$requete =$db->prepare("INSERT INTO Films (ID) VALUES (:id)");
		$requete->bindParam(":id", $id);
		$requete->execute();
?>