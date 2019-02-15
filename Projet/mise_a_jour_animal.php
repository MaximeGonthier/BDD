<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
        <title>Mise à jour d'un animal</title>
    </head>
    
<body>
	
	<?php
	$idmaj = $_POST['idmaj'];
	$espece = $_POST['espece'];
	$taille = $_POST['taille'];
	$numerobassin = $_POST['numerobassin'];
	$db="Aquarium";
	
	$link = new mysqli("localhost",$_POST['username'],$_POST['password']);
	if ($link->connect_errno){
	  die("Couldn't connect to MySQL ".$link->connect_error);
	}
	
	$link->select_db($db) or die("Select Error: ".$link->error);
	$result = $link->query("UPDATE Animaux SET espece = '$espece' WHERE Animaux.id = $idmaj")
	or die("Insert Error: ".$link->error());;
	
	$result = $link->query("UPDATE Animaux SET taille = '$taille' WHERE Animaux.id = $idmaj")
	or die("Insert Error: ".$link->error());;
	
	$result = $link->query("UPDATE Animaux SET numerobassin = '$numerobassin' WHERE Animaux.id = $idmaj")
	or die("Insert Error: ".$link->error());;
	
	$link->close();
	
	print "\nAnimal modifié\n";
	?>
	
	<form method="POST" action="update_animal.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Mettre à jour un nouvel animal ?">
	</form>
	
	<img src="image/logo.png" class = image2 />
	
	<p class = balise2 >Retourner à la page de sélection des fonctions du site : 
	<form method="POST" action="connexion.php">
		<input type="hidden" name="username" value="<?php print $_POST['username']?>">
		<input type="hidden" name="password" value="<?php print $_POST['password']?>">
		<input type="submit" value="Cliquez ici"/>
	</form>
	
	<p class = balise2 >Retourner à la page de connexions utilisateur : <a href="acceuil.php">Cliquer ici</a></p>

	</body>
</html>
