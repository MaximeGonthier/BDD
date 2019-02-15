<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
        <title>Suppression d'un article</title>
    </head>
    
<body>
	
	<?php
	$idsupr = $_POST['idsupr'];

	$db="Aquarium";
	
	$link = new mysqli("localhost",$_POST['username'],$_POST['password']);
	if ($link->connect_errno){
	  die("Couldn't connect to MySQL ".$link->connect_error);
	}
	
	$link->select_db($db) or die("Select Error: ".$link->error);
	$result = $link->query("DELETE FROM Articles WHERE Articles.codebarre = $idsupr")or die("Insert Error: ".$link->error());;
	
	$link->close();
	print "\nArticle supprimé\n";
	?>
	
	<form method="POST" action="supprime_article.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Supprimer un autre article ?">
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
