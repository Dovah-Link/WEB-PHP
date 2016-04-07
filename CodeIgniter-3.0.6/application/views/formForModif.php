<html>
<head>
	<title>Modif</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url("css/Bootstrap/css/bootstrap.css")?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url("css/style.css")?>"/>
	<meta charset="UTF-8"/> 
</head>
<body>
	<form method="POST" action="<?=site_url("liens/update/$row->id")?>">
		<div class="container">
				<h1><p class="text-center">FORMULAIRE</p></h1>
				<h4><p  class="text-center"><a href="<?=site_url('liens/index')?>">Retour à la liste</a></p></h4></br></br>

				<div class="input-group input-group-lg">
			  		<span class="input-group-addon" id="sizing-addon1"><div class="glyphicon glyphicon-text-size"></div></span>
			  		<input type="text" class="form-control" placeholder="Titre" value="<?php echo $row->titre; ?>" name ="titre" aria-describedby="sizing-addon1">
				</div>
			</br>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><div class="glyphicon glyphicon-text-size"></div></span>
					<textarea type="textarea" rows="4" id="description" name="description" class="form-control " placeholder="Description" aria-describedby="basic-addon1" name ="Description"><?php echo $row->description; ?></textarea>			
				</div>
			</br>
				<div class="input-group input-group-lg">
			  		<span class="input-group-addon" id="sizing-addon1"><div class="glyphicon glyphicon-text-color"></div></span>
			  		<input type="text" class="form-control" value ="<?php echo $row->url; ?>" name="url" placeholder="URL" aria-describedby="sizing-addon1">
				</div>
			</br>

				<div class="input-group input-group-lg">
			  		<span class="input-group-addon" id="sizing-addon1">@</span>
			  		<input type="text" class="form-control" name="webm" value="<?php echo $row->webmaster; ?>" placeholder="Entrez le mail du Webmaster" aria-describedby="sizing-addon1">
				</div>
			</br>

					<div class="btn-group">
					  <button id="tm" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <?php 
					    if ($row->theme != "") 
					    	echo $row->theme; 
					    else 
					    	echo "Thème";
					    ?>
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">Actualité</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="#">Sport</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="#">Divers</a></li>					    
					  </ul>
					</div>
<!-- <?php
if($row->affichage == "oui")
?> -->
					<div class="checkbox">
	    				<label>
	      					<input class="checkbox" type="checkbox" <?php if ($row->affichage == "oui") echo " checked "; ?> > Visible
	    				</label>
	  				</div>

	  				<div res>
		  				<input hidden type="text" id="affich" name="affichage"/>
		  				<input hidden type="text" id="themes" name="theme"/>
	  				</div>
				
	  		</br>

	  		<div class="riri text-right">
	  			<button type="submit" class="btn btn-success" id="ok">Enregistrer</button>
	  		</div>

		</div>
	</form>

</body>
</html>

<script src="<?=base_url("script/jquery.js")?>"></script>
<script src="<?=base_url("script/bootstrap.js")?>"></script>
<script src="<?=base_url("script/fctJQ.js")?>"></script>
