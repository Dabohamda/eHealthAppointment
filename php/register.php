<?php 
	include('db.php');

	$data = json_decode(file_get_contents("php://input"));

	$nom_patient = mysql_real_escape_string($data->nom);
	$prenom_patient = mysql_real_escape_string($data->prenom);
	$date_naissance = mysql_real_escape_string($data->annee);
	$sexe = mysql_real_escape_string($data->sexe);
	$tel_patient = mysql_real_escape_string($data->tel);
	$adresse_patient = mysql_real_escape_string($data->adresse);
	$emailpatient = mysql_real_escape_string($data->email);
	$password = md5( mysql_real_escape_string($data->password));
	$numero_patient = mysql_real_escape_string(strtoupper(substr($nom_patient, 0, 2).rand(0, 1000).substr($prenom_patient, 0, 3)));


	$req = $bdd->prepare('INSERT INTO patients(nom_patient, prenom_patient, date_naissance, sexe, tel_patient, adresse_patient,emailpatient, numero_patient) VALUES(:nom, :prenom, :annee, :sexe, :tel, :adresse, :email, :numero)');
	$req->execute(array(
		'nom' => $nom_patient,
		'prenom' => $prenom_patient,
		'annee' => $date_naissance,
		'sexe' => $sexe,
		'tel' => $tel_patient,
		'adresse' => $adresse_patient,
		'email' => $emailpatient,
		'numero' => $numero_patient
	));

	// User authentification account creation 

	$requser = $bdd->prepare('INSERT INTO utilisateurs(username, password, idroles, idtypeuser) VALUES(:username, :password, :role, :type)');
	$requser->execute(array(
		'username' => $emailpatient,
		'password' => $password,
		'role' => 'client',
		'type' => 'patient',
	));

?>