<html>
<head>
	<title>Liste</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url("css/Bootstrap/css/bootstrap.css")?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url("css/style.css")?>"/>
	<meta charset="UTF-8"/> 
</head>

<body bgcolor='#FFFFCC'>
<div class="container">
	<div class="row">
		<div class="col-md-12" id="change">
			<table class='table'>
				<h1 id="titreListes">LISTES</h1>
				<h4 id="titreEnregistrer"><a href="<?=site_url("liens/form")?>">Ajouter un nouvel enregistrement</a></h4></br></br>

<?php 		
				foreach ($liste as $row): 
?>
				<tr>
					<td><?php echo $row->id; ?></td>
					<td><?php echo $row->titre; ?></td>
					<td><?php echo $row->description; ?></td>
					<td><?php echo $row->url; ?></td>
					<td>
						<a class="det">Détails</a>
					</td>
				</tr>
<?php 
				endforeach; 
?>


			</table>
		</div>
	</div>
</div>
</body>
</html>

<script src="<?=base_url("script/jquery.js")?>"></script>
<script src="<?=base_url("script/fctJQ.js")?>"></script>
<script>
	$(".det").click(function()
	{
		console.log("test");
		$("#change").load("<?= site_url("liens/detail/$row->id")?>");
	});
</script>