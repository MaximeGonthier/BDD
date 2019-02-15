<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
        <title>Recherche</title>
    </head>
<body>
	
<a href="#bas">descendre</a><br/>

	<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cherche=$_POST['cherche'];
	$db="Aquarium";
	$link = new mysqli("localhost", $username, $password);
	if ($link->connect_errno){
	  die("Couldn't connect to MySQL ".$link->connect_error);
	}
	$link->select_db($db)
	or die("Couldn't open $db: ".$link->error);

	$sql = "SELECT id, espece, taille, Animaux.numerobassin, Bassin.batiment, Bassin.temperature
		FROM Animaux, Bassin
		WHERE Animaux.espece LIKE '%$cherche%'
		AND Bassin.numerobassin = Animaux.numerobassin";

	$result = $link->query($sql) or die("SELECT Error: ".$link->error);
	
	echo "<p class=\"balise3\"> Voici les résultat pour \"$cherche\"</p>";

	print "<table class = \"tableau1\">\n";
	print "<tr>";

			print "	<th>ID</th>\n";
			print "<th>ESPECE</th>\n";
			print "	<th>TAILLE</th>\n";
			print "	<th>N° BASSIN</th>\n";
			print "	<th>BATIMENT</th>\n";
			print "	<th>°C</th>\n";
			print "	</tr>\n";
			
	while ($get_info = $result->fetch_row()){ 
		print "<tr>\n";

		foreach ($get_info as $field) 
		print "\t<td width = 140px><font />$field</font></td>\n";}
	
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

	<br>
	<br>
	<br>
	<br>
	<a id="bas">Bas de page</a><br/>

	</body>
</html>
