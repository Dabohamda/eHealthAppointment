<?php 
	include('db.php');

	$data = json_decode(file_get_contents("php://input"));

	$nommedecin = mysql_real_escape_string($data->nom);
	$prenommedecin = mysql_real_escape_string($data->prenom);
	$datenaissance = mysql_real_escape_string($data->annee);
	$sexemedecin = mysql_real_escape_string($data->sexe);
	$specialitemed = mysql_real_escape_string($data->specialite);
	$postemed = mysql_real_escape_string($data->poste);
	$anneeexper = mysql_real_escape_string($data->annee);
	$telmedecin = mysql_real_escape_string($data->telephone);
	$emailmed = md5( mysql_real_escape_string($data->email));
	$nummedecin = mysql_real_escape_string(strtoupper(substr($nommedecin, 0, 2).rand(0, 1000).substr($prenom_prenommedecin, 0, 3)));


	$req = $bdd->prepare('INSERT INTO medecins(nommedecin, prenommedecin, datenaissance, sexemedecin, specialitemed, postemed, anneeexper, telmedecin, emailmed, nummedecin) VALUES(:nom, :prenom, :annee, :sexe, :specialite, :poste, :annee, :tel, :email, :numero)');
	$req->execute(array(
		'nom' => $nommedecin,
		'prenom' => $prenommedecin,
		'annee' => $datenaissance,
		'sexe' => $sexemedecin,
		'specialite' => $specialitemed,
		'poste' => $postemed,
		'annee' => $anneeexper,
		'tel' => $telmedecin,
		'email' => $emailmed,
		'numero' => $nummedecin
	));

	// User authentification account creation 

	$requser = $bdd->prepare('INSERT INTO utilisateurs(username, password, idroles, idtypeuser) VALUES(:username, :password, :role, :type)');
	$requser->execute(array(
		'username' => $emailmed,
		'password' => $password,
		'role' => 'agent',
		'type' => 'medecin',
	));

?>