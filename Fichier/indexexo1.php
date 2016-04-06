<html>
<head>
	<title>Exo</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php

		$fp = fopen("ListeLiens.txt","a");
		while(!feof($fp))
		{
			$str = "www.bonjourmadame.mmmh";
			fputs($fp,$str);
		}
		$fp=fclose("ListeLiens.txt");

		if (file_exists("ListeLiens.txt"))/* Vérification si fichier existant */			
		{
			$fp = fopen("ListeLiens.txt","r"); /* Ouverture en lecture seule */
		} 
		else 
		{
			echo "Fichier introuvable !";
			exit();
		}
		
		/* Boucle jusqu'a la fin du fichier */
		while (!feof($fp))
		{
			 $enr = fgets ($fp,4096); /* Lecture de la ligne */
			 echo "$enr<br>";
		}

	?>
</body>
</html>