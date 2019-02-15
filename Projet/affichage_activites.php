<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
        <title>Les activitées</title>
    </head>
<body>
	
	<a id = "haut" href="#bas">Aller en bas de la page</a><br/>

	<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$db="Aquarium";
	$link = new mysqli("localhost", $username, $password);
	if ($link->connect_errno){
	  die("Couldn't connect to MySQL ".$link->connect_error);
	}
	$link->select_db($db)
	or die("Couldn't open $db: ".$link->error);

	$result = $link->query( "SELECT * FROM Activites" )
	or die("SELECT Error: ".$link->error);
	
	echo "<p class=\"balise3\"> Voici les activitées</p>";

	print "<table class = \"tableau1\">\n";
	print "<tr>";
			print "	<th>N°</th>\n";
			print "<th>DATE</th>\n";
			print "	<th>BASSIN</th>\n";
			print "	<th>HEURE</th>\n";
			print "	<th>TYPE</th>\n";
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

	<p class = balise2>Retourner à la page de sélection des fonctions du site : 
	
	<form method="POST" action="connexion.php">
		<input type="hidden" name="username" value="<?php print $_POST['username']?>">
		<input type="hidden" name="password" value="<?php print $_POST['password']?>">
		<input type="submit" value="Cliquez ici"/>
	</form>
	
	<p class = balise2 >Retourner à la page de connexions utilisateur : <a href="acceuil.php">Cliquer ici</a></p>

	<img src="image/logo.png" class = image2 />
	<img src="image/activitees.jpg" class = image1 />
	<img src="image/pingouin.png" class = image7 />

	<a id = "bas" href="#haut">Remonter en haut de la page</a><br/>

	</body>
</html> 
