<?php 
	include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Le combat va démarrer!</title>
	<link rel="stylesheet" type="text/css" href="styleCombat.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<body>
	<!-- Sidebar -->
	<div class="sidebar">
		<a href="Accueil.html" id="accueil">
	  		Accueil
	  	</a>

		<a href="ChoixCombattants.php" id="choixCombattant">
	  		Choix Pokemon
	  	</a>
		
	</div>

	<!-- Contenaire pour l'arene -->
	<div class="mainCombat">
		<!-- Contenaire pour le rang du haut de l'arene -->
		<div class="combatHaut">

			<div class="hautGauche">
				<p class="nomAdv">Nom pokemon</p>
				<div class="pdvBarreAdv">
				</div> 
			</div>
			<div class="hautDroite">
					<img src="Images/Pokeball.png" id="pokeAdversaire">
			</div>

		</div>

		<!-- Contenaire pour le rang du bas de l'arene -->
		<div class="combatBas">
			
			<div class="basGauche">
				<img src="Images/Pokeball.png" id="pokeJoueur">
			</div>
			<div class="basDroite">
				<p class="nomPoke">Nom pokemon</p>
				<div class="pdvBarrePoke">
				</div>
			</div>

		</div>

		<!-- Contenaire pour la barre d'attaques pour la customiser et la disposer sur la largeur de l'écran -->
		<div class="pokeAttacks"></div>

	</div>

	<script type="text/javascript" src="scriptReglesPageCombat.js"></script>
	<script type="text/javascript" src="scriptPageCombat.js">	
	</script>
</body>
</html>