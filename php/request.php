<?php 
	include('db.php');

	$data = json_decode(file_get_contents("php://input"));

	$req = $bdd->prepare('INSERT INTO demandes(typedem, messagedem, iduser, jour, heure) VALUES(:type, :description, :iduser, :jour, :heure)');
	$req->execute(array(
		'type' => mysql_real_escape_string($data->type),
		'description' => mysql_real_escape_string($data->description),
		'iduser' => 12,
		'jour' =>mysql_real_escape_string($data->jour),
		'heure' => mysql_real_escape_string($data->heure)
	));

	?>