<html>

	<head>
		<title>Contact</title>
		
		<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<meta charset="UTF-8"/> 
	</head>

	<body> 
		<div class="jumbotron">
		  <h1>Hello, world!</h1>
		  <p>Clique sur le boutons çi-dessous pour afficher le formulaire de contact</p>
		  <p><button id="go" class="btn btn-primary btn-lg" role="button">Démarrez</button></p>
		</div>
<form method="post" action="library.php" id="form">
		<div class="panel panel-primary" id="contenu">
			<div class="panel-heading"><h3 class="panel-title">Contact</h3>
			
				<div class="panel panel-primary">

					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
					  <input type="text" class="form-control" id="soci" placeholder="Société" aria-describedby="basic-addon1" name ="Société"/>
					  <div class="input-group-addon etoile">*</div>
					</div>
					
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><div class="glyphicon glyphicon-user"></div></span>
					  <input type="text" class="form-control" id="cont" placeholder="Contact" aria-describedby="basic-addon1"name ="Contact"/>
					  <div class="input-group-addon etoile">*</div>
					</div>

					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><div class="glyphicon glyphicon-home"></div></span>
					  <textarea type="textarea" rows="4" id="adrs" class="form-control " placeholder="Adresse" aria-describedby="basic-addon1" name ="Adresse"></textarea>
					  <div class="input-group-addon etoile">*</div>
					</div>

					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><div class="glyphicon glyphicon-home"></div></span>
					  <input type="text" class="form-control" id="cp" placeholder="Code postal" aria-describedby="basic-addon1" name ="codpos">
					  <div class="input-group-addon etoile">*</div>
					</div>

					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><div class="glyphicon glyphicon-home"></div></span>
					  <input type="text" class="form-control" id="ville" placeholder="Ville" aria-describedby="basic-addon1" name ="Ville">
					  <div class="input-group-addon etoile">*</div>
					</div>

					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">@</span>
					  <input type="text" class="form-control" id="mail" placeholder="Mail" aria-describedby="basic-addon1" name ="Mail">
					  <div class="input-group-addon etoile">*</div>
					</div>

					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><div class="glyphicon glyphicon-phone"></div></span>
					  <input type="text" class="form-control" id="tel" placeholder="Téléphone" aria-describedby="basic-addon1" name ="Tel">
					  <div class="input-group-addon etoile">*</div>
					</div>
				</div>
					<span id="env">Choisir l'environnement de travail</span>
					<span class="dropup">
					  <button class="btn btn-default dropdown-toggle" type="button" id="drodownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" name ="Environnement">
					    <span class="caret"></span>
					  	<span id="riri">Dropdown</span>
					  </button>
					  <span class="input-group-addon etoile" id="ets">*</span>
					  				

						<ul class="dropdown-menu" aria-labelledby="drodownMenu1">
						    <li><a href="#">WEB</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="#">C#</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="#">C</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="#">C++</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="#">Visual Basic</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="#">SQL</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="#">Access</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="#">Windev</a></li>
							<li role="separator" class="divider"></li>
						    <li><a href="#">Delphi</a></li>
						</ul>
					</span>
					<input type="hidden" name="envir" value="" id="envir">
				</br>
				<div id="btnn">
					<input type="reset" class="btn btn-default navbar-btn" value="Reset" id="btnnok"/> 
					<button type="button" class="btn btn-default navbar-btn" id="btnok">OK</button>
				</div>
			</div>
		</div>
	</form>
	</body>
</html>
<script src="jquery.js"></script>
<script src="../Bootstrap/js/bootstrap.js"></script>
<script src="js.js"></script>
<script src="jqueryFCTN.js"></script>