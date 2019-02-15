<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
        <title>Inserer animal</title>
    </head>
    
<body>
		<h1>Titre principal</h1>
		
<?php
print '<html><head><title>Test Connexion</title></head><body>';
$link = new mysqli('localhost', 'max', 'user');
if ($link->connect_errno) {
die ('Erreur de connexion : errno: ' . $link->errno . ' error: '
. $link->error);
}
$link->select_db('Aquarium') or die('Erreur selection BD: ' . $link->error);
print 'connexion ok !';
print '</body></html>';

//~ $bdd->exec('INSERT INTO Animaux(id, espece, taille, numerobassin) 
//~ VALUES(11111987, \'Poisson-rouge\', 5, 1)');

?>
<br>
<form method="POST" align = "center" action="page2.php">
	<p> Inserer un animal : </p> <br />
 <p>Inserer un id</p> <input type = "text" name="id" placeholder ="id"  size="15" tabindex=1 required> <br /> 
 <p>Inserer une espece </p><input type = "text" name="espece" placeholder ="nomespece" size="15" tabindex=1 required> <br /> 
<p>Inserer une taille </p><input type = "text" name="taille" placeholder ="taille" size="15" tabindex=1 required> <br />
<p>Inserer un bassin </p><input type = "text" name="numerobassin" placeholder ="numerobassin" size="15" tabindex=1 required> <br />
<br><br>
</form>

</body>

</html>
