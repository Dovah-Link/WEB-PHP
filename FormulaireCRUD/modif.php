
<?php 
	require ("fonction.php");
	$id = $_GET["id"];
	$db = connexionDB();
	$requete = $db->prepare("select * from liens where id=:id");
	$requete->bindParam(":id", $id);
	$requete->execute();
	$lien = $requete->fetch(PDO::FETCH_OBJ);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajout</title>
	<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="UTF-8"/> 
</head>
<body>
	<form method="POST" action="update.php">
		<div class="container">
				<h1><p class="text-center">FORMULAIRE</p></h1>
				<h4><p  class="text-center"><a href="index.php">Retour à la liste</a></p></h4></br></br>

				<div class="input-group input-group-lg">
			  		<span class="input-group-addon" id="sizing-addon1"><div class="glyphicon glyphicon-text-size"></div></span>
			  		<input type="text" class="form-control" placeholder="Titre" name ="titre" value="<?=$lien->titre?>" aria-describedby="sizing-addon1">
				</div>
			</br>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><div class="glyphicon glyphicon-text-size"></div></span>
					<textarea type="textarea" rows="4" id="description" name="description" class="form-control " placeholder="Description" aria-describedby="basic-addon1" name ="Description"><?=$lien->description?></textarea>			
				</div>
			</br>
				<div class="input-group input-group-lg">
			  		<span class="input-group-addon" id="sizing-addon1"><div class="glyphicon glyphicon-text-color"></div></span>
			  		<input type="text" class="form-control" name="url" placeholder="URL" value="<?=$lien->url?>" aria-describedby="sizing-addon1">
				</div>
			</br>

				<div class="input-group input-group-lg">
			  		<span class="input-group-addon" id="sizing-addon1">@</span>
			  		<input type="text" class="form-control" name="webm" placeholder="Entrez le mail du Webmaster" value="<?=$lien->webmaster?>" aria-describedby="sizing-addon1">
				</div>
			</br>

					<div class="btn-group">
					  <button id="tm" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <?=$lien->theme?><span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">Actualité</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="#">Sport</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="#">Divers</a></li>					    
					  </ul>
					</div>

					<div class="checkbox">
	    				<label>
	    					<?php
	    					if ($lien->affichage == "oui") 
		    					{
		    				?>
		    						<input class="checkbox" type="checkbox" checked> Visible
		    				<?php
		    					}
		    					else
		    					{
		    				?>
		    						<input class="checkbox" type="checkbox"> Visible
		    				<?php
		    					}
	      					?>
	    				</label>
	  				</div>

	  				<div res>
		  				<input type="text" id="affich" name="affichage"/>
		  				<input type="text" id="themes" name="theme"/>
	  				</div>
				
	  		</br>

	  		<div class="riri text-right">
	  			<button type="submit" class="btn btn-success" id="ok">Enregistrer</button>
	  		</div>

		</div>
	</form>

</body>
</html>

<script src="jquery.js"></script>
<script src="fctJQ.js"></script>
<script src="../Bootstrap/js/bootstrap.js"></script>