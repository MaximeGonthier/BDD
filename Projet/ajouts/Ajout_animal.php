<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css?<?php echo time(); ?>" type="text/css" />
        <title>Ajout d'un animal</title>
    </head>
    
<body>
	
	<img src="image/logo.png" class = image2 />	
	<?php
	$id = $_POST['id'];
	
	
	 $id = $_POST['id'];
	 if ($id <= 9999999) { die("Erreur d'id trop petit ".$link->connect_error); }
	 if ($id >= 100000000) { die("Erreur d'id trop grand ".$link->connect_error); }
	
	$espece = $_POST['espece'];
	$taille = $_POST['taille'];
	$numerobassin = $_POST['numerobassin'];
	$db="Aquarium";
	$link = new mysqli("localhost",$_POST['username'],$_POST['password']);
	if ($link->connect_errno){
	  die("Couldn't connect to MySQL ".$link->connect_error);
	}
	$link->select_db($db) or die("Select Error: ".$link->error);
	$result = $link->query("INSERT INTO `Animaux`(`id`, `espece`, `taille`, `numerobassin`) 
	VALUES($id, '$espece', $taille, $numerobassin)")or die("Insert Error: ".$link->error());;
	$link->close();
	print "\nAnimal ajouté\n";
	?>
	
	<p>
	<form method="POST" action="insert_animal.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Inserer un nouvel animal ?">
	</form>
	</p>
	
	<p class = balise2 >Retourner à la page de sélection des fonctions du site : 
	<form method="POST" action="../connexion.php">
		<input type="hidden" name="username" value="<?php print $_POST['username']?>">
		<input type="hidden" name="password" value="<?php print $_POST['password']?>">
		<input type="submit" value="Cliquez ici">
	</form></p>
	
	<p class = balise2 >Retourner à la page de connexions utilisateur : <a href="../acceuil.php">Cliquer ici</a></p>


	</body>
</html>
