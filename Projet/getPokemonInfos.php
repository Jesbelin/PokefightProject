<?php

	include('database.php');
	$poke = $_GET['poke'] ?? 'default';
?>

labelAttaque='NON'

<?php
	$pokeAttaque1 = $bdd->prepare("
		SELECT attaque.NOM_ATTAQUE_AT, PUISSANCE_AT
		FROM attaque 
		INNER JOIN connaitre 
		ON attaque.NOM_ATTAQUE_AT = connaitre.NOM_ATTAQUE_AT 
		Where connaitre.NOM_POKEMON_POK= :poke
		");
	$pokeAttaque1->execute(array(':poke'=>$_GET['poke']));
	while ($attaque1 = $pokeAttaque1->fetch()){
		echo $attaque1['NOM_ATTAQUE_AT']. ' <b> '. $attaque1['PUISSANCE_AT']. '</b>'; 
		echo '<option value="'.$attaque1["NOM_ATTAQUE_AT"].  ' <b> '. $attaque1['PUISSANCE_AT']. '</b>">'; 
		echo $attaque1['NOM_ATTAQUE_AT']. ' <b> '. $attaque1['PUISSANCE_AT']. '</b>';
		echo '</option>';
	}
?>


