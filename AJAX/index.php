<!DOCTYPE html>
<html>
<head>
	<title>AJAX</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	require "fonction.php";
	connexionDB();
	$result = liste();

		while ($lien = $result->fetch(PDO::FETCH_OBJ))
		{
?>
<table class='table'>
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
			</tr>
<?php
		}
?>
</table>
</body>
</html>