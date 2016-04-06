<html>

	<head>
		<title> Detail </title>
		<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
		
		require "fonction.php"; // Inclusion de notre bibliothèque de fonctions
		$lien=AffDetail();
?>

	</head>

	<body>
		<div class="alert alert-info" id="info" role="alert">
			<?php echo $lien->titre ?> <i> Webmaster <?php echo $lien->webmaster ?> </i><br/>
			<?php echo $lien->description ?> <br/>
			<?php echo $lien->url ?>
		</div>

		<div>
			<p class="bg-warning" id="modifsupr">
				<a href="modif.php?id=<?=$lien->id?>">Modifier</a>
				<a href="delete.php?id=<?=$lien->id?>">Suprimer</a>
			</p>
		</div>

	</body>

</html>