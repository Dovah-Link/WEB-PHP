<html>
<head>
	<title>Détail</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url("css/Bootstrap/css/bootstrap.css")?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url("css/style.css")?>"/>
	<meta charset="UTF-8"/> 
</head>

<body bgcolor='#FFFFCC'>
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-info" id="infodetails">
				TITRE : <?= strtoupper($row->titre); ?></br>
				WEBMASTER : <?= strtoupper($row->webmaster); ?></br>
				DESCRIPTION : <?= $row->description; ?></br>
				URL : <?= $row->url; ?></br>
				THEME : <?= strtoupper($row->theme); ?></br>
				AFFICHAGE : <?= strtoupper($row->affichage); ?></br>
</br>
			</div>

			<div class="link">
				<a href="<?=site_url("liens/formModif/$row->id")?>">Modifier</a>
				<a href="<?=site_url("liens/delete/$row->id")?>">Supprimer</a>
			</div>
	</div>
</body>
</html>