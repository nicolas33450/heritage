<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>La classe Bateau</title>
</head>
<body>
	<?php
		// Inclusion de la class Bateau
		include 'bateau.php';

		// On intancie un objet de type Bateau qui hérite de la classe moyenTransport
		$b1 = new Bateau();

		// On définit le nombre de coques et la vitesse Maxi
		$b1->setNbCoques(3);
		$b1->setVitesseMax(65);

		// On affiche les valeurs
		$b1->afficheVitesse();
		$b1->afficheCoques();
	?>
</body>
</html>
