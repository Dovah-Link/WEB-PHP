<html>

	<head>
		<meta charset="utf-8"/>
		<title>Impair</title>
	</head>

	<body>

	<?php
		for($i=1;$i<151;$i=$i+2)
		{
			$j=1;
			$tab[$j]= $i;
			echo $tab[$j]." | ";
			$j++;
		}

	?>

	<?php

		// $NbrCol : le nombre de colonnes
		// $NbrLigne : le nombre de lignes
			$NbrCol = 12;
			$NbrLigne = 12;
		// --------------------------------------------------------
		// on affiche en plus sur les 1ere ligne et 1ere colonne 
		// les valeurs a multiplier (dans des cases en couleur)
		// le tableau fera donc 10 x 10
		// --------------------------------------------------------
	?>
			<table border="1" width="400">

				<tr>
				<td bgcolor="#CCCCCC">
					i x j
				</td>

	<?php  
			for ($j=1; $j<=$NbrCol; $j++) 
			{ 
	?>
		    	<td bgcolor="#FFFF66"> 
		    		<?= $j ?>
				</td>
	<?php
			}
	?>
			</tr>
		 		
		 		<!--lignes suivantes  -->
	
	<?php	
		for ($i=1; $i<=$NbrLigne; $i++) 
		{
	?>
		   <tr>
   	<?php
		   for ($j=1; $j<=$NbrCol; $j++) 
		   {
		       // 1ere colonne (colonne 0)
			    if ($j==1) 
			    {
	?>
			        <td bgcolor="#FFFF66">
			        	<?= $i ?>
			        </td>
	<?php	      
				}
		       // colonnes suivantes
		        if ($i==$j) 
		        {
	?>
		        	<td bgcolor="#FFCC66">
	<?php
		        } 

		        else 
		        {
	?>
		        	<td>
	<?php
		        }
		       // ------------------------------------------
		       // AFFICHAGE ligne $i, colonne $j
		      echo $i*$j;
		       // ------------------------------------------
	?>		
					</td>
	<?php
		   }
	?>

		</tr>

	<?php
		   $j=1;
		}
	?>

			</table>

	<?php

		for($i=0;$i<499;$i++)
		{
	?>
			Je dois faire des sauvegardes régulières de mes fichiers</br>
	<?php

		}

	?>

	</body>

</html>