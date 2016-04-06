<html>
<head>

	<meta charset="UTF8"/>
	<title>testDB</title>

</head>
<body>+46769436383
<?php

	try 
	{

		$db = new PDO('mysql:host=127.0.0.1;dbname=sites', "root", "");
	 	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	$db->query("SET NAMES UTF8");
	 	$requete = "SELECT * FROM liens";
		$result = $db->query($requete);
		//$result->closeCursor();

		while ($lien = $result->fetch(PDO::FETCH_OBJ)) 
		{
			
?>
			<div> <?php echo $lien->titre ?> </div>
			<div> <?php echo $lien->webmaster ?> </div>
			<a href="script2.php?id=<?php echo $lien->id ?>">details</a>
			<hr>
			<!-- <div> <?php echo $lien->description ?> </div>
			<div> <?php echo $lien->url ?> </div>
			<div> <?php echo $lien->theme ?> </div> -->

<?php
		}
	}

	catch (Exception $e) 
	{
		echo 'Erreur : ' . $e->getMessage() . '<br />' ;
		echo 'N° : ' . $e->getCode() . '<br />' ;
		die('Fin du script') ;
	}
?>

</body>
</html>
