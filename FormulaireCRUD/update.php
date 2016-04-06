<?php 

	$titre = $_POST["titre"];
	$url = $_POST["url"];
	$description = $_POST["description"];
	$id = $_POST["id"];


	require ("fonction.php");
	$db = connexionDB();
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$requete = $db->prepare("update liens set titre=:t, url=:u, description=:d where id=:id");
	$requete->bindParam(":t", $titre);
	$requete->bindParam(":u", $url);
	$requete->bindParam(":d", $description);
	$requete->bindParam(":id", $id);
	$requete->execute();
	header("Location: index.php");

?>