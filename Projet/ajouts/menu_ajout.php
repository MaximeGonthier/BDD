<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="../style2.css?<?php echo time(); ?>" type="text/css" />
        <title>Connexions</title>
    </head>
    <body>
		
	<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$db="Aquarium";
	$link = new mysqli("localhost", $username, $password);
	if ($link->connect_errno){
	  die("Couldn't connect to MySQL ".$link->connect_error);
	}
	?>

	<h1>Selection des options d'ajouts</h1>
	
	<div align="center">
	<table class = tableau4 width="300" cellpadding="10" cellspacing="0">
	<tr align="center" valign="top">
	<td align="left" colspan="1" rowspan="1" bgcolor="aqua">
		
	<h3>Selection de l'ajout</h3>
	
	<form method="POST" action="insert_animal.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Ajouter un animal">
	</form><br>
	
	<form method="POST" action="insert_soigneur.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Inserer un soigneur">
	</form><br>
	
	</td></tr></table>
	</div>

	<p class = balise2 >Retourner à la page de sélection des fonctions du site : 
	<form method="POST" action="../connexion.php">
		<input type="hidden" name="username" value="<?php print $_POST['username']?>">
		<input type="hidden" name="password" value="<?php print $_POST['password']?>">
		<input type="submit" value="Cliquez ici"/>
	</form>
	
	<p class = balise2 >Retourner à la page de connexions utilisateur : <a href="../acceuil.php">Cliquer ici</a></p>

	<img src="image/acceuil1.jpg" class = image3 />	
	<img src="image/acceuil2.jpg" class = image4 />	
	<img src="image/acceuil3.jpg" class = image5 />	
	<img src="image/acceuil4.jpg" class = image6 />	

	</body>
</html>
