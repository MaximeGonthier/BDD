<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
        <title>Affichage</title>
    </head>
<body>
	<a href="#bas">descendre</a><br/>

	<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$rayon=$_POST['rayon'];
	$db="Aquarium";
	$link = new mysqli("localhost", $username, $password);
	if ($link->connect_errno){
	  die("Couldn't connect to MySQL ".$link->connect_error);
	}
	$link->select_db($db)
	or die("Couldn't open $db: ".$link->error);

	if ($rayon != null) { 
		$sql = "SELECT codebarre, prix, rayon
		FROM Articles
		WHERE Articles.rayon = '$rayon'";
	}
	else {
		$sql = "SELECT codebarre, prix, rayon 
		FROM Articles";
	}
	
	$result = $link->query($sql) or die("SELECT Error: ".$link->error);
	
	if ($rayon != null) { echo "<p class=\"balise3\"> Voici les articles du rayon numéro $rayon</p>"; }
	else { echo "<p class=\"balise3\"> Voici tous les articles de la boutique de l'aquarium</p>"; }

	print "<table class = \"tableau1\">\n";
	print "<tr>";

			print "	<th>CODEBARRE</th>\n";
			print "<th>PRIX</th>\n";
			print "	<th>N° RAYON</th>\n";
			print "	</tr>\n";
			
	while ($get_info = $result->fetch_row()){ 
	print "<tr>\n";

	foreach ($get_info as $field) 
	print "\t<td width = 140px><font />$field</font></td>\n"; }
	print "</tr>\n";
	print "</table>\n";
	
	$result->free();
	$link->close();
	?>

	<p class = balise2 >Retourner à la page de sélection des fonctions du site : 
	<form method="POST" action="connexion.php">
		<input type="hidden" name="username" value="<?php print $_POST['username']?>">
		<input type="hidden" name="password" value="<?php print $_POST['password']?>">
		<input type="submit" value="Cliquez ici"/>
	</form>
	
	<p class = balise2 >Retourner à la page de connexions utilisateur : <a href="acceuil.php">Cliquer ici</a></p>

	<img src="image/logo.png" class = image2 />
	<br>
	<br>
	<br>
	<br>
	<a id="bas">Bas de page</a><br/>

	</body>
</html> 
