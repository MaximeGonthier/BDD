<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
        <title>Selection de l'animal a supprimer</title>
    </head>
    
<body>
	
	<h1>Indiquez l'id l'animal que vous voulez supprimer</h1>

	<table class = tableau0>
	<tr>
	<td>
		
	<form method="POST" align = "center" action="suppression_animal.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Inserer l'id de l'animal a supprimer</p> <input type = "text" name="idsupr" placeholder ="idsupr"  size="15" tabindex=1 required> <br />

	<br><br>
	
	<input type=submit value=Submit><input type=reset>
	
	</form>
	</td></tr></table>

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
