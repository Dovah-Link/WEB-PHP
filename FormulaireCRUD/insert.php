<html>
<head>
	<title>Ajout reussi</title>
	<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="UTF-8"/> 

</head>
<body>

<?php
	require ("form.php");
	require ("fonction.php");

		$str = strtolower($_POST['theme']);
		$date = date('Y-m-d');

		
		$db = connexionDB();

		$requete =$db->prepare("INSERT INTO liens (titre,webmaster,description,url,theme,date,affichage) VALUES (:titre,:webmaster,:description,:url,:theme,:day,:affichage)");
		$requete->bindParam(":titre", $_POST['titre']);
		$requete->bindParam(":webmaster", $_POST['webm']);
		$requete->bindParam(":description", $_POST['description']);
		$requete->bindParam(":url", $_POST['url']);
		$requete->bindParam(":theme", $str);
		$requete->bindParam(":day", $date);
		$requete->bindParam(":affichage", $_POST['affichage']);
		$requete->execute();
?>

	<div class="container">
		<span class="win label label-success">Enregistrement Réussi</span>
	</div>

</body>
</html>

<?php
	//header("Location: index.php");
?>

<script>
		alert("ok");
		document.location="index.php";
</script>


<?php
	header("Location: index.php?action=1");
?>