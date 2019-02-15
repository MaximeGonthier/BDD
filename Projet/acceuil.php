<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style2.css?<?php echo time(); ?>" type="text/css" />
        <title>Page d'acceuil</title>
    </head>
    
<body>
	
	<h1>L'AQUARIUM DE VERSAILLES</h1>
	<br>

	<div align="center">
	<table class = tableau4 width="350" cellpadding="10" cellspacing="50" >
	<tr align="center" valign="top">
	<td align="center" colspan="1" rowspan="1"  >
	<form method="POST" action="connexion.php">
		
	<?php
	print "Entrer un nom d'utilisateur: <input type=text name=username size=20><br>\n";
	print "Entrer un mot de passe:  <input type=password name=password size=20><br>\n";
	print "<br>\n";
	print "<input type=submit value=Submit><input type=reset>\n";
	?>

	</form>
	</td>
	</tr>
	</table>
	</div>
	
	<img src="image/acceuil1.jpg" class = image3 />	
	<img src="image/acceuil2.jpg" class = image4 />	
	<img src="image/acceuil3.jpg" class = image5 />	
	<img src="image/acceuil4.jpg" class = image6 />
	<br>
	<p class = "balise2">Adresse : 5 boulevard de la reine VERSAILLES </p>
</body>
</html>

