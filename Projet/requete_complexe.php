<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
        <title>Affichage</title>
    </head>
<body>
	

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

$result = $link->query( "SELECT nom, prenom, COUNT(DISTINCT Soigne.id) AS nombre_soigne
	FROM Soigneur, Soigne
	WHERE Soigneur.numerosoigneur = Soigne.numerosoigneur
	GROUP BY nom
	UNION
	SELECT nom, prenom, 0
	FROM Soigneur, Soigne
	WHERE Soigneur.numerosoigneur NOT IN
	(SELECT DISTINCT Soigneur.numerosoigneur	
	FROM Soigneur, Soigne
	WHERE Soigneur.numerosoigneur = Soigne.numerosoigneur)" )
or die("SELECT Error: ".$link->error);
$num_rows = $result->num_rows;
echo "<p class=\"balise3\"> Voici pour chaque soigneur, le nombre d'animaux qu'il soigne, y compris ceux dont le nombre est 0</p>";

print "<table class = \"tableau1\">\n";
print "<tr>";

		print "	<th>NOM</th>\n";
		print "<th>PRENOM</th>\n";
		print "	<th>NOMBRE</th>\n";
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
<img src="image/requin1.jpg" class = image1 />

</body>
</html> 
