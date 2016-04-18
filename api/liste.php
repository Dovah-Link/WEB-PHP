<?php

	require "fonction.php"; // Inclusion de notre bibliothèque de fonctions
	
	$result = liste();


	if (!$result) 
	{
		print "PDO::errorInfo():";
		$msg = $db->errorInfo();
		print_r($cnx->errorInfo());
		die("Erreur dans la requête ! (str_requete)<br><a href=\"javascript:history.go(-1)\">BACK</a>");
	}

	header('Content-Type: application/json');
	echo json_encode($result->fetchAll(PDO::FETCH_OBJ));
?>