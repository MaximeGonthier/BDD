<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
        <title>Affichage</title>
    </head>
<body>
<a id = "haut" href="#bas">Aller en bas de la page</a><br/>


	<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$bassin=$_POST['bassin'];
	$db="Aquarium";
	$link = new mysqli("localhost", $username, $password);
	if ($link->connect_errno){
	  die("Couldn't connect to MySQL ".$link->connect_error);
	}
	$link->select_db($db)
	or die("Couldn't open $db: ".$link->error);

	if ($bassin != null) { 
		$sql = "SELECT id,espece,taille, Animaux.numerobassin 
		FROM Animaux, Bassin 
		WHERE Bassin.numerobassin = '$bassin' 
		AND Bassin.numerobassin = Animaux.numerobassin";
	}
	else {
		$sql = "SELECT id,espece,taille, Animaux.numerobassin 
		FROM Animaux";
	}
	
	$result = $link->query($sql) or die("SELECT Error: ".$link->error);
	$num_rows = $result->num_rows;
	if ($bassin != null) { echo "<p class=\"balise3\"> Voici les animaux du bassin numéro $bassin</p>"; }
	else { echo "<p class=\"balise3\"> Voici tous les animaux de l'aquarium</p>"; }

	print "<table class = \"tableau1\">\n";
	print "<tr>";

			print "	<th>ID</th>\n";
			print "<th>ESPECE</th>\n";
			print "	<th>TAILLE</th>\n";
			print " <th>N° BASSIN</th>\n";
			print "	</tr>\n";
			
	while ($get_info = $result->fetch_row()){ 
	print "<tr>\n";

	foreach ($get_info as $field) 
	print "\t<td width = 140px><font />$field</font></td>\n";
	}
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
	<img src="image/requin1.jpg" class = image8 />
	<br>
	<br>
	<br>
	<br>
	<br>
	<a id = "bas" href="#haut">Remonter en haut de la page</a><br/>

	</body>
	</html> 
