<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
        <title>Mise à jour d'un soigneur</title>
    </head>
    
<body>
	
	<?php
	$numero = $_POST['numero'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$specialite = $_POST['specialite'];
	$db="Aquarium";
	
	$link = new mysqli("localhost",$_POST['username'],$_POST['password']);
	if ($link->connect_errno){
	  die("Couldn't connect to MySQL ".$link->connect_error);
	}
	
	$link->select_db($db) or die("Select Error: ".$link->error);
	$result = $link->query("UPDATE Soigneur SET nom = '$nom' WHERE Soigneur.numerosoigneur = $numero")
	or die("Insert Error: ".$link->error());;
	
	$result = $link->query("UPDATE Soigneur SET prenom = '$prenom' WHERE Soigneur.numerosoigneur = $numero")
	or die("Insert Error: ".$link->error());;
	
	$result = $link->query("UPDATE Soigneur SET specialite = '$specialite' WHERE Soigneur.numerosoigneur = $numero")
	or die("Insert Error: ".$link->error());;
	
	$link->close();
	
	print "\nSoigneur modifié\n";
	?>
	
	<form method="POST" action="update_soigneur.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Modifier un autre soigneur ?">
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
