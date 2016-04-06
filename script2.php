<html>

	<head>
		<title> testDb.php </title>
<?php
// Pour récupérer la variable passée dans l'URL, il faut utiliser le tableau associatif $_GET.
	$id=$_GET["id"];
		try 
		{
 			$db = new PDO('mysql:host=localhost;charset=utf8;dbname=sites', 'root', '');
		}

		catch (Exception $e) 
		{
			print 'Erreur : ' . $e->getMessage() . '<br />';
			print 'N° : ' . $e->getCode();
			die('Fin du script');
		}

		$requete = "SELECT * FROM liens WHERE id=".$id;
		$result = $db->query($requete);
		$lien = $result->fetch(PDO::FETCH_OBJ);
		$result->closeCursor();
?>
	</head>

	<body>

		<div> 
			<?php echo $lien->titre ?> 
		</div>

		<div> 
			<?php echo $lien->webmaster ?> 
		</div>

		<div> 
			<?php echo $lien->description ?> 
		</div>

		<div> 
			<?php echo $lien->url ?> 
		</div>

		<div> 
			<?php echo $lien->theme ?> 
		</div>
		
	</body>

</html>