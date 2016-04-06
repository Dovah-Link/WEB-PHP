<html>
<head>
	<title>Ajout reussi</title>
	<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="UTF-8"/> 

</head>
<body>

<?php
		try
		{
			require ("fonction.php");
			$id = $_GET["id"];
			$db = connexionDB();
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$requete = $db->prepare("DELETE FROM liens WHERE id=:id");
			$requete->bindParam(":id", $id);
			$requete->execute();
?>
			<script>
					alert("ok");
					document.location="index.php";
			</script>
<?php
		}
		catch(Exception $e)
		{
?>
			<script>
					alert("nop");
					echo $e -> getMessage();
			</script>
<?php
		}
?>
</body>
</html>

