<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css?<?php echo time(); ?>" type="text/css" />
        <title>Inserer animal</title>
    </head>
    
	<body>
			
	<h1>Insertion d'un animal</h1>
	
	<table class = tableau0>
	<tr>
	<td>
	<form method="POST" align = "center" action="Ajout_animal.php">

	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	
	<p> Inserer un animal : </p> <br />
	 <p>Inserer un id (attention : 8 chiffres) </p> <input type = "text" name="id" placeholder ="id"  size="15" tabindex=1 required> <br />
	
	 <p>Inserer une espece </p><input type = "text" name="espece" placeholder ="nom de l'espece" size="15" tabindex=1 required> <br /> 
	<p>Inserer une taille </p><input type = "text" name="taille" placeholder ="taille" size="15" tabindex=1 required> <br />
	<p>Inserer un bassin </p><input type = "text" name="numerobassin" placeholder ="le numero du bassin" size="15" tabindex=1 required> <br />
	<br><br>
	
	<input type=submit value=Submit><input type=reset>
	</form>
	</td></tr></table>

	<img src="image/logo.png" class = image2 />
	
	<p class = balise2 >Retourner à la page de sélection des fonctions du site : 
	<form method="POST" action="../connexion.php">
		<input type="hidden" name="username" value="<?php print $_POST['username']?>">
		<input type="hidden" name="password" value="<?php print $_POST['password']?>">
		<input type="submit" value="Cliquez ici"/>
	</form>
	
	<p class = balise2 >Retourner à la page de connexions utilisateur : <a href="../acceuil.php">Cliquer ici</a></p>

	</body>

</html>
