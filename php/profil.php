<?php 
	include('db.php');

	
	// On récupère tout le contenu de la table patients
	$reponse = $bdd->query('SELECT * FROM patients');

		// On affiche chaque entrée une à une
	
	while ($donnees = $reponse->fetch())
	{
		$data [] = $donnees;
	}
	$reponse->closeCursor(); // Termine le traitement de la requête

	print json_encode($data);


?>