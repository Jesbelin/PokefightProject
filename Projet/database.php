	<!-- Communiquer avec la bdd	 -->
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