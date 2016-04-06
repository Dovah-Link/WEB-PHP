<html>
<head>
	<title>Liste</title>
	<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="UTF-8"/> 
</head>

<body bgcolor='#FFFFCC'>
<div class="container">
		<div class="row">
			<div class="col-md-12">

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
?>

					<h1><p class="text-center">SOMMAIRE</h1>
					<p class="text-center"><a id="form" href="form.php">Ajouter un enregistrement</a></p></br></br></br>
<?php
				if ($result->rowCount() == 0) 
				{
					// Pas d'enregistrement
					die("La table est vide");
				}
?>	
				<table class='table'>

<?php

				while ($lien = $result->fetch(PDO::FETCH_OBJ))
				{
?>
					<tr>
					<td id='cinq'> 
						<?= $lien->id ?> 
					</td>

					<td id='quatreneuf'>
						<?= $lien->titre ?>
					</td>

					<td><i><a href='$lien->url'>
						<?= $lien->url ?></a></i>
					</td>

					<td id='quatorze'><a href="detail.php?id=<?= $lien->id ?>" >
						Afficher le détail </a></td>
					</tr>
<?php
				}
?>
				</table>
			</div>
		</div>
	</div>


</body>
</html>