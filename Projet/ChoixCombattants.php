<?php 
	include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Le combat va démarrer!</title>
	<link rel="stylesheet" type="text/css" href="styleChoixCombattant.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<body>
	
	<div class="content">
		<main class="mainCombattants">
			<!-- <img src="Images/FightGround.jpg" class="mainFight"> -->
			<!-- <h1><center>Choix du pokemon et de ses attaques</center></h1> -->
			
		<fieldset>
			<div class="formfield-select">
				<div class="formfield-select--container color">
					<?php
						try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=pokefight;charset=utf8', 'root', '');
						}
						catch (Exception $e)
						{
						        die('Erreur : ' . $e=getMessage());
						}
					?>
					
					<div class="combattant">
						<div class="identitePokemon">

							<!-- Liste des pokemons -->
		
							<p id="listPokemon">
								<select id="listPokemon1" onchange=" RequestRecupPokemon(this), RequestAttacks(this)">
									<optgroup label="Pokemon1">
									<?php
										$reponse = $bdd->query("SELECT * FROM pokemons");
										while ($donnees = $reponse->fetch()) {
									?>
									<?php echo $donnees['NOM_POKEMON_POK']; ?>
									<option value="<?php echo $donnees["NOM_POKEMON_POK"]; ?>"> <?php echo $donnees["NOM_POKEMON_POK"]; ?> </option>
									
									<?php
									}
									?>
									</optgroup>
								</select>
							</p>
							<div class="pokeball">
								<img src="Images/Pokeball.png" id="pokeImage">
							</div>
						</div>
						
						<div class="attaquesPokemon">
							<!-- Listes des attaques pour le pokemon -->

							<p>
								<select onchange="RequestAttackStats(this)">
									<optgroup label="attaque1" class="listAttacks1">
									
									</optgroup>
								</select>
							</p>

							<p>
								<select onchange="RequestAttackStats(this)">
									<optgroup label="attaque2" class="listAttacks2">
									
									</optgroup>
								</select>
							</p>

							<p>
								<select onchange="RequestAttackStats(this)">
									<optgroup label="attaque3" class="listAttacks3">
									
									</optgroup>
								</select>
							</p>

							<p>
								<select onchange="RequestAttackStats(this)">
									<optgroup label="attaque4" class="listAttacks4">
									
									</optgroup>
								</select>
							</p>
						</div>
					</div>
					<div class="boutons">
						<!-- Choix deuxieme pokemon -->
						<p>
						<button class="validPoke">Valider pokemon</button>
						</p>

					<!-- 	<p>
							<select id="listPokemon2" onchange="Request(this)">
								<optgroup label="Pokemon2">
								<?php
									$reponse = $bdd->query("SELECT * FROM pokemons");
									while ($donnees = $reponse->fetch()) {
								?>
								<?php echo $donnees['NOM_POKEMON_POK']; ?>
								<option value="<?php echo $donnees["NOM_POKEMON_POK"]; ?>"> <?php echo $donnees["NOM_POKEMON_POK"]; ?> </option>
								
								<?php
								}
								?>
								</optgroup>
							</select>
						</p> -->
						
						<p>
							<button class="lancerCombat">
								Lancer le combat
							</button>
						</p>					
					</div>		
				</div>
			</div>
		</fieldset>
		<script src="scriptAvance.js" type="text/javascript"></script>

		<div class="footer">
		  	<a href="Accueil.html" class="text_footer">
	  			Accueil
	  		</a>
		</div>
		</main>
	</div>
	
	<!-- Lien vers le fichier JavaScript utilisé pour créer l'animation pokeball fermée - pokeball ouverte. -->
	<script type="text/javascript" src="ScriptPokeball.js"></script>
</body>
</html>