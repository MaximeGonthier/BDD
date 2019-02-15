<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
        <title>Selection du soigneur que vous voulez mettre à jour</title>
    </head>
    
<body>
	<h1>Indiquez le numéro du soigneur que vous voulez mettre à jour</h1>

	<table class = tableau0>
	<tr>
	<td>
		
	<form method="POST" align = "center" action="mise_a_jour_soigneur.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	
	<p> Mise à jour soigneur : </p> <br />
	
	<p>Inserer le numéro du soigneur à mettre à jour (Les numéros des soigneurs vont de 1 à 9)</p> <input type = "text" name="numero" placeholder ="numéro"  size="15" tabindex=1 required> <br />
	<p>Inserer le nom </p><input type = "text" name="nom" placeholder ="nom" size="15" tabindex=1 required> <br /> 
	<p>Inserer le prénom </p><input type = "text" name="prenom" placeholder ="prenom" size="15" tabindex=1 required> <br />
	
	<label for "specialite"> spécialité :
	<select id = "specialite" name = "specialite">
		<option value = "requin">requin
		<option value = "poisson" selected>poisson
		<option value = "mollusque">mollusque
		<option value = "pingouin">pingouin
		<option value = "otarie">otarie
	</select>
	
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
