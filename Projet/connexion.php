<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style2.css?<?php echo time(); ?>" type="text/css" />
        <title>Fonctionalitées du site</title>
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
	if($_POST['username'] == "Directeur"){
?>

	<h1>Selection des options du site</h1>
	<div align="center">
	<table class = tableau4 width="300" cellpadding="20">
	<tr align="center" valign="center">
	<td align="center" bgcolor="aqua">
		
	<h3>Selection d'une fonctionalité</h3>
	
	<form method="POST" action="ajouts/menu_ajout.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Acceder au menu des ajouts">
	</form><br>
	

	<form method="POST" action="affichage_animaux.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Entrer le numéro du bassin à afficher puis cliquez sur "Afficher les animaux" (laisser vide si vous voulez afficher tous les bassins): <input type="text" name="bassin" size="5"></p>
	<input type="submit" value="Afficher les animaux">
	</form><br>

	
	<form method="POST" action="supprime_animal.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Supprimer un animal">
	</form><br>
	
	<form method="POST" action="update_animal.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Mettre à jour les données d'un animal">
	</form><br>

	<form method="POST" action="affichage_soigneur.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Afficher les soigneur">
	</form><br>
	
	<form method="POST" action="update_soigneur.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Mettre à jour les informations d'un soigneur">
	</form><br>
	
	<form method="POST" action="affichage_activites.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Afficher les activitées">
	</form><br>
	
	<form method="POST" action="requete_complexe.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Nb d'animaux soigné par chaque soigneur">
	</form><br>
	
	<form method="POST" action="affichage_articles.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Entrer le numéro du rayon à afficher puis cliquez sur "Afficher les articles" (laisser vide si vous voulez afficher tous les rayons): <input type="text" name="rayon" size="5"></p>
	<input type="submit" value="Afficher les articles de la boutique">
	</form><br>
	
	<form method="POST" action="supprime_article.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Supprimer un article">
	</form><br>
	
	<form method="POST" action="cherche.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Rentrer l'espece de l'animal à chercher (une partie seulement de son nom peut suffire):  <input type="text" name="cherche" size="5"></p>
	<input type="submit" value="Rechercher">
	</form><br>

	</td></tr></table>
	</div>
	
<?php }
else if($_POST['username'] == "max"){
?>

	<h1>Selection des options du site</h1>
	<div align="center">
	<table class = tableau4 width="300" cellpadding="20">
	<tr align="center" valign="center">
	<td align="center" bgcolor="aqua">
		
	<h3>Selection d'une fonctionalité</h3>
	
	<form method="POST" action="ajouts/menu_ajout.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Acceder au menu des ajouts">
	</form><br>
	

	<form method="POST" action="affichage_animaux.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Entrer le numéro du bassin à afficher puis cliquez sur "Afficher les animaux" (laisser vide si vous voulez afficher tous les bassins): <input type="text" name="bassin" size="5"></p>
	<input type="submit" value="Afficher les animaux">
	</form><br>

	
	<form method="POST" action="supprime_animal.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Supprimer un animal">
	</form><br>
	
	<form method="POST" action="update_animal.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Mettre à jour les données d'un animal">
	</form><br>

	<form method="POST" action="affichage_soigneur.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Afficher les soigneur">
	</form><br>
	
	<form method="POST" action="update_soigneur.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Mettre à jour les informations d'un soigneur">
	</form><br>
	
	<form method="POST" action="affichage_activites.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Afficher les activitées">
	</form><br>
	
	<form method="POST" action="requete_complexe.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Nb d'animaux soigné par chaque soigneur">
	</form><br>
	
	<form method="POST" action="affichage_articles.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Entrer le numéro du rayon à afficher puis cliquez sur "Afficher les articles" (laisser vide si vous voulez afficher tous les rayons): <input type="text" name="rayon" size="5"></p>
	<input type="submit" value="Afficher les articles de la boutique">
	</form><br>
	
	<form method="POST" action="supprime_article.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Supprimer un article">
	</form><br>
	
	<form method="POST" action="cherche.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Rentrer l'espece de l'animal à chercher (une partie seulement de son nom peut suffire):  <input type="text" name="cherche" size="5"></p>
	<input type="submit" value="Rechercher">
	</form><br>

	</td></tr></table>
	</div>

<?php }
else if($_POST['username'] == "Visiteur"){
?>
		
	<h1>Selection des options du site</h1>
	<div align="center">
	<table class = tableau4 width="300" cellpadding="20">
	<tr align="center" valign="center">
	<td align="center" bgcolor="aqua">
	<h3>Selection d'une fonctionalité</h3>

	<form method="POST" action="affichage_animaux.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Entrer le numéro du bassin à afficher puis cliquez sur "Afficher les animaux" (laisser vide si vous voulez afficher tous les bassins): <input type="text" name="bassin" size="5"></p>
	<input type="submit" value="Afficher les animaux">
	</form><br>

	<form method="POST" action="affichage_soigneur.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Afficher les soigneur">
	</form><br>
	
	<form method="POST" action="affichage_activites.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Afficher les activitées">
	</form><br>
	
	<form method="POST" action="affichage_articles.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Entrer le numéro du rayon à afficher puis cliquez sur "Afficher les articles" (laisser vide si vous voulez afficher tous les rayons): <input type="text" name="rayon" size="5"></p>
	<input type="submit" value="Afficher les articles de la boutique">
	</form><br>
	
	<form method="POST" action="requete_complexe.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Nb d'animaux soigné par chaque soigneur">
	</form><br>
	
	<form method="POST" action="cherche.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Rentrer l'espece de l'animal à chercher (une partie seulement de son nom peut suffire):  <input type="text" name="cherche" size="5"></p>
	<input type="submit" value="Rechercher">
	</form><br>

	</td></tr></table>
	</div>

<?php }
else if($_POST['username'] == "Soigneur"){
?>
	<h1>Selection des options du site</h1>
	
	<div align="center">
	<table class = tableau4 width="300" cellpadding="20">
	<tr align="center" valign="center">
	<td align="center" bgcolor="aqua">
	<h3>Selection d'une fonctionalité</h3>

	<form method="POST" action="affichage_animaux.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Entrer le numéro du bassin à afficher puis cliquez sur "Afficher les animaux" (laisser vide si vous voulez afficher tous les bassins): <input type="text" name="bassin" size="5"></p>
	<input type="submit" value="Afficher les animaux">
	</form><br>

	<form method="POST" action="update_animal.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Mettre à jour les données d'un animal">
	</form><br>

	<form method="POST" action="affichage_soigneur.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Afficher les soigneur">
	</form><br>
	
	<form method="POST" action="update_soigneur.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Mettre à jour les informations d'un soigneur">
	</form><br>
	
	<form method="POST" action="affichage_activites.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Afficher les activitées">
	</form><br>
	
	<form method="POST" action="requete_complexe.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<input type="submit" value="Nb d'animaux soigné par chaque soigneur">
	</form><br>

	<form method="POST" action="cherche.php">
	<input type="hidden" name="username" value="<?php print $_POST['username']?>">
	<input type="hidden" name="password" value="<?php print $_POST['password']?>">
	<p>Rentrer l'espece de l'animal à chercher (une partie seulement de son nom peut suffire):  <input type="text" name="cherche" size="5"></p>
	<input type="submit" value="Rechercher">
	</form><br>

	</td></tr></table>
	</div>

<?php }
else {
?>
	<h1>Erreur d'identifiant</h1>
	<p class = balise2 >Retourner à la page de connexions utilisateur : <a href="acceuil.php">Cliquer ici</a></p> <?php } ?>

	<img src="image/acceuil1.jpg" class = image3 />	
	<img src="image/acceuil2.jpg" class = image4 />	
	<img src="image/acceuil3.jpg" class = image5 />	
	<img src="image/acceuil4.jpg" class = image6 />	

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p class = balise2 >Retourner à la page de connexions utilisateur : <a href="acceuil.php">Cliquer ici</a></p>
	
	<a id = "bas" href="#haut">Remonter en haut de la page</a><br/>
	
	</body>
</html>


