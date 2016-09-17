<?php
include('php/db.php');
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
     <link href="css/signin.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
function validateFormpatient() {
    if( document.myForm.nom.value == "" )
         {
            alert( "Please provide your First name!" );
            document.myForm.nom.focus() ;
            return false;
         }


         if( document.myForm.prenom.value == "" )
         {
            alert( "Please provide your Last name!" );
            document.myForm.prenom.focus() ;
            return false;
         }

         if( document.myForm.sexe.value == "" )
         {
            alert( "Please provide your sexe type!" );
            document.myForm.sexe.focus() ;
            return false;
         }

         if( document.myForm.annee.value == "" )
         {
            alert( "Please provide your birth date!" );
            document.myForm.année.focus() ;
            return false;
         }

         if( document.myForm.tel.value == "" )
         {
            alert( "Please provide your phone number!" );
            document.myForm.tel.focus() ;
            return false;
         }

         if( document.myForm.adresse.value == "" )
         {
            alert( "Please provide your address!" );
            document.myForm.adresse.focus() ;
            return false;
         }

         if( document.myForm.exampleInputEmail1.value == "" )
         {
            alert( "Please provide your email!" );
            document.myForm.exampleInputEmail1.focus() ;
            return false;
         }

         if( document.myForm.password1.value == "" )
         {
            alert( "Please provide your password!" );
            document.myForm.password1.focus() ;
            return false;
         }

         if( document.myForm.password2.value == "" )
         {
            alert( "Please confirm your password!" );
            document.myForm.password2.focus() ;
            return false;
         }
         if (document.myForm.password1.value!=document.myForm.password2.value) {
          alert("The password does not match");
          document.myForm.password2.focus();
          return false;
         }

}
</script>


<script type="text/javascript">
function validateFormdocteur() {
    if( document.myForm1.nommed.value == "" )
         {
            alert( "Please provide your First name!" );
            document.myForm1.nommed.focus() ;
            return false;
         }


         if( document.myForm1.prenommed.value == "" )
         {
            alert( "Please provide your Last name!" );
            document.myForm1.prenommed.focus() ;
            return false;
         }

         if( document.myForm1.sexemed.value == "" )
         {
            alert( "Please provide your sexe type!" );
            document.myForm1.sexemed.focus() ;
            return false;
         }

         if( document.myForm1.anneemed.value == "" )
         {
            alert( "Please provide your birth date!" );
            document.myForm1.anneemed.focus() ;
            return false;
         }

         

         if( document.myForm1.specialityemed.value == "" )
         {
            alert( "Please provide your specialty!" );
            document.myForm1.specialityemed.focus() ;
            return false;
         }

          if( document.myForm1.postemed.value == "" )
         {
            alert( "Please provide your post!" );
            document.myForm1.postemed.focus() ;
            return false;
         }

         if( document.myForm1.embauchemed.value == "" )
         {
            alert( "Please provide your engagement date!" );
            document.myForm1.embauchemed.focus() ;
            return false;
         }
          if( document.myForm1.Experiencemed.value == "" )
         {
            alert( "Please provide your Experience!" );
            document.myForm1.Experiencemed.focus() ;
            return false;
         }

         if( document.myForm1.telmed.value == "" )
         {
            alert( "Please provide your phone number!" );
            document.myForm1.telmed.focus() ;
            return false;
         }

          


         if( document.myForm1.emailmed.value == "" )
         {
            alert( "Please provide your email!" );
            document.myForm1.emailmed.focus() ;
            return false;
         }

         if( document.myForm1.passwordmed.value == "" )
         {
            alert( "Please provide your password!" );
            document.myForm1.passwordmed.focus() ;
            return false;
         }

         if( document.myForm1.passwordmed2.value == "" )
         {
            alert( "Please confirm your password!" );
            document.myForm1.passwordmed2.focus() ;
            return false;
         }
         if (document.myForm1.passwordmed.value!=document.myForm1.passwordmed2.value) {
          alert("The password does not match");
          document.myForm1.passwordmed2.focus();
          return false;
         }

}
</script>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background:green;color:white">
      <div class="container" style="background:green;color:white">
        <div class="navbar-header" style="background:green;color:white">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background:green;color:white">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="background:white;color:green">EHealth</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li style="color:white"><a style="color:white" href="#">Home</a></li>
            <li><a href="#about" style="color:white">Councelling & Tips</a></li>
         
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"style="color:white" >Compte <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.html" style="color:black">Connect...</a></li>
                <li><a href="create.html" style="color:black">Create an account</a></li>
              </ul>
            </li>
            <li><a href="#contact" style="color:white">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1 class="text-center">Welcome To EHealth Care</h1>
      </div>
      <p class="lead"></p>

      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading text-center">Please sign</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="login" autofocus>
        <br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pwd">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <input class="btn btn-lg btn-success btn-block col-md-6" type="submit" value="Sign in" name="connexion">
        <div class="col-md-12 text-center">
        <br>
        
        </div>
      </form>
      <?php
if(isset($_POST['connexion'])){
  if(empty($_POST['login'])){
    echo'<script>alert("login can\'t be blank");</script>';
  }
  else if(empty($_POST['pwd'])){
 echo'<script>alert("password can\'t be blank");</script>';
  }
  else{
   $login=mysql_real_escape_string($_POST['login']);
   $pwd=md5(mysql_real_escape_string($_POST['pwd']));
   $sql_log=mysql_query("select *from utilisateurs where username='$login' and password='$pwd' limit 1") or die(mysql_error());
   if(mysql_num_rows($sql_log)>0){
    while($log_state=mysql_fetch_array($sql_log)){
      $role=$log_state['idroles'];
      if($role=='0'){
        header("location: profile.php");
      }
      else{
        header("location:panel.php");
      }
    }
   }
   else{
echo'<script>alert("Ce compte n\'existe pas");</script>';

   }
  }
}
      ?>
      <div class="row">
      <div class="col-md-6">
      <button type="button" class="btn btn-info pull-right" data-target="#patient" data-toggle="modal">Are you Patient?</button> 
      </div>
      <div class="col-md-6">
    <button class="btn btn-primary pull-left" data-target="#docteur" data-toggle="modal">Are you Doctor?</button>
      </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">&#000; Copyright eHealth Academy Aout-September 2016. All rights reserved</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<div id="patient" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:#4169E1;color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Patient record</h4>
      </div>
      <div class="modal-body">
        <form action="" name="myForm" onsubmit=" return validateFormpatient()"  method="post">
              <div class="form-group">
                <label for="nom">First Name:</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" ng-model="nom">
              </div>
              <div class="form-group">
                <label for="prenom">Last name:</label>
                <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom" ng-model="prenom">
              </div>
              <div class="form-group">
                <label for="prenom">Sexe: &nbsp;</label>
                
                  <select  name="sexe" class="form-control"  id="sexe">
                  <option selected=""></option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>  
                  </select>            
               
              </div>
              <div class="form-group">
                <label for="prenom">Year of Birth:</label>
                <input type="date" class="form-control" id="annee" name="annee" ng-model="annee">
                 
              </div>
              <div class="form-group">
                <label for="prenom">Phone:</label>
                <input type="number" class="form-control" id="tel" placeholder="XXXXXXXXX" name="tel" ng-model="tel">
              </div>

              <div class="form-group">
                <label for="prenom">Address:</label>
                <textarea class="form-control" rows="3" id="adresse" name="adresse" ng-model="adresse"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="exampleInputEmail1" ng-model="email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password:</label>
                <input type="password" class="form-control" id="password1" placeholder="Password" name="password1" ng-model="password">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password:</label>
                <input type="password" class="form-control" id="password2" placeholder="Confirm passowrd" name="password2">
              </div>
              <input type="submit" class="btn btn-success" value="Créer mon compte" name="save_patient">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php
function getmail($em){
  $sql_em=mysql_query("select * from patients where emailpatient='$em' limit 1") or die(mysql_error());
  if (mysql_num_rows($sql_em)==1) {
    $u='<script>alert("This email already exists, please enter a new email");</script>';
    return $u;
    
  }
}
if (isset($_POST['save_patient'])) {
if(!empty($_POST['exampleInputEmail1'])) {

echo getmail($_POST['exampleInputEmail1']);

}
else
{



$nom_patient = mysql_real_escape_string($_POST['nom']);
  $prenom_patient = mysql_real_escape_string($_POST['prenom']);
  $date_naissance = mysql_real_escape_string($_POST['annee']);
  $sexe = mysql_real_escape_string($_POST['sexe']);
  $tel_patient = mysql_real_escape_string($_POST['tel']);
  $adresse_patient = mysql_real_escape_string($_POST['adresse']);
  $emailpatient = mysql_real_escape_string($_POST['exampleInputEmail1']);
  $password =md5(mysql_real_escape_string($_POST['password1']));
  $numero_patient = mysql_real_escape_string(strtoupper(substr($nom_patient, 0, 2).rand(0, 1000).substr($prenom_patient, 0, 3)));

$sql_patient="insert into patients(id_patient,nom_patient,prenom_patient,date_naissance,sexe,groupesanguin,numero_patient,adresse_patient,tel_patient,emailpatient,etat,created_at,updated_at) values('','$nom_patient','$prenom_patient','$date_naissance','$sexe','O','$numero_patient','$adresse_patient','$tel_patient','$emailpatient','1',now(),now())";
$pat=mysql_query($sql_patient) or die(mysql_error());
if ($pat) {
  $sql_user="insert into utilisateurs(id_user,username,password,idroles,idtypeuser) values('','$emailpatient','$password','0','0')";
  mysql_query($sql_user) or die(mysql_error());
  echo '<script>alert("New patient recorded successfully");</script>';
}
}
}
?>


<div id="docteur" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:#003979;color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New doctor</h4>
      </div>
      <div class="modal-body">
        <form action="" name="myForm1" method="post" onsubmit=" return validateFormdocteur()" >
              <div class="form-group">
                <label for="nom">First name:</label>
                <input type="text" class="form-control" id="nommed" placeholder="Nom" name="nommed" ng-model="nom">
              </div>
              <div class="form-group">
                <label for="prenom">Last Nmae:</label>
                <input type="text" class="form-control" id="prenommed" placeholder="Prénom" name="prenommed" ng-model="prenom">
              </div>
              <div class="form-group">
                <label for="prenom">Sexe: &nbsp;</label>
                
                  <select  name="sexemed" class="form-control"  id="sexemed">
                  <option selected></option>
                  <option value="M">male</option>
                  <option value="F">Female</option>  
                  </select>            
               
              </div>
              <div class="form-group">
                <label for="prenom">Year of Birth:</label>
                <input type="number" class="form-control" id="anneemed" name="anneemed" ng-model="annee">
                 
              </div>
              <div class="form-group">
                <label for="prenom">Speciality:</label>
                <input type="text" class="form-control" id="specialityemed" name="specialityemed" ng-model="annee">
                 
              </div>

              <div class="form-group">
                <label for="prenom">Position:</label>
                <input type="text" class="form-control" id="postemed" name="postemed" ng-model="annee">
                 
              </div>

              <div class="form-group">
                <label for="prenom">Date d&prime;engagement:</label>
                <input type="date" class="form-control" id="embauchemed" name="embauchemed" ng-model="annee">
                 
              </div>

              <div class="form-group">
                <label for="prenom">Year of experience:</label>
                <input type="number" class="form-control" id="Experiencemed" name="Experiencemed" ng-model="annee">
                 
              </div>

              <div class="form-group">
                <label for="prenom">Phone:</label>
                <input type="number" class="form-control" id="telmed" placeholder="XXXXXXXXX" name="telmed" ng-model="tel">
              </div>

             
              <div class="form-group">
                <label for="exampleInputEmail1">Email address:</label>
                <input type="email" class="form-control" id="emailmed" placeholder="Email" name="emailmed" ng-model="email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password:</label>
                <input type="password" class="form-control" id="passwordmed" placeholder="Password" name="passwordmed" ng-model="password">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password:</label>
                <input type="password" class="form-control" id="passwordmed2" placeholder="Confirm passowrd" name="passwordmed2">
              </div>
              <input type="submit" class="btn btn-primary" value="Créer mon compte" name="save_doctor">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php
function getemdoctor($emdoc){
$sql_emdoct=mysql_query("select * from utilisateurs where username='$emdoc' limit 1") or die(mysql_error());
  if (mysql_num_rows($sql_emdoct)>0) {
    $udoc='<script>alert("This email already exists, please enter a new email");</script>';
    return $udoc;
    
  }
}

if (isset($_POST['save_doctor'])) {



$nom_doctor = mysql_real_escape_string($_POST['nommed']);
  $prenom_doctor = mysql_real_escape_string($_POST['prenommed']);
  $date_embauche = mysql_real_escape_string($_POST['embauchemed']);

  $sexemed = mysql_real_escape_string($_POST['sexemed']);
  $Experiencemed = mysql_real_escape_string($_POST['Experiencemed']);
  $specialityemed = mysql_real_escape_string($_POST['specialityemed']);
  $postemed = mysql_real_escape_string($_POST['postemed']);
   $datenaissance =mysql_real_escape_string($_POST['anneemed']);
  $telmed =mysql_real_escape_string($_POST['telmed']);
  $emailmed =mysql_real_escape_string($_POST['emailmed']);
  $password_doct =md5(mysql_real_escape_string($_POST['passwordmed']));
  $numero_doct = mysql_real_escape_string(strtoupper(substr($nom_doctor, 0, 2).rand(0, 1000).substr($prenom_doctor, 0, 3)));


  $ins_doc="insert into medecins(idmedecin,nommedecin,prenommedecin,datenaissance, sexemedecin, specialitemed, postemed,dateembauche,anneeexper,telmedecin,emailmed) values('','$nom_doctor','$prenom_doctor','$datenaissance','$sexemed','$specialityemed','$postemed','$date_embauche','$Experiencemed','$telmed','$emailmed')";

  $sql_doctor =mysql_query($ins_doc) or die(mysql_error());
  if ($sql_doctor) {
   
  $doct_c= "insert into utilisateurs(id_user,username,password,idroles,idtypeuser) values('','$emailmed','$password_doct','1','1')";
  mysql_query($doct_c) or die(mysql_error(oid));

  echo '<script>alert("New doctor recorded successfully");</script>';
}
}



?>
  </body>
    <script type="text/javascript" src="js/angular.min.js"></script>
   <!-- <script type="text/javascript" src="js/app.js"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
