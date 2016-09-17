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
function validateappointment() {
   /* if( document.myForm.nom.value == "" )
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
        */ }


</script>


<script type="text/javascript">
*/function validateFormdocteur() {
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

*/}
</script>

  </head>

  <body style="">
  <div class="container">
  <h4 style="background:#003979;color:#fff;padding:15px;text-align:center">UPDATE</h4>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
<?php<?php
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

  <body style="">
  <div class="container">
  <h4 style="background:#003979;color:#fff;padding:15px;text-align:center">UPDATE</h4>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
<?php
if($_GET['id']){

    $blue=$_GET['id'];

    $sql_show=mysql_query("select *from medecins where idmedecin='$blue' limit 1") or die(mysql_error());
    while($ro=mysql_fetch_array($sql_show)){
        ?>
 
  <form action="" name="myForm1" method="post" onsubmit=" return validateFormdocteur()" >
              <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nommed"  name="nommed" ng-model="nom" value="<?php echo $ro['nommedecin'];?>">
              </div>
              <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenommed"  name="prenommed" ng-model="prenom" value="<?php echo $ro['prenommedecin'];?>">
              </div>
              <div class="form-group">
                <label for="prenom">Sexe: &nbsp;</label>
                
                  <select  name="sexemed" class="form-control"  id="sexemed">
                  <option selected><?php echo $ro['sexemedecin'];?></option>
                  <option value="M">Masculin</option>
                  <option value="F">Feminin</option>  
                  </select>            
               
              </div>
              <div class="form-group">
                <label for="prenom">Année de naissance:</label>
                <input type="number" class="form-control" id="anneemed" name="anneemed" ng-model="annee" value="<?php echo $ro['datenaissance'];?>">
                 
              </div>
              <div class="form-group">
                <label for="prenom">Specialite:</label>
                <input type="text" class="form-control" id="specialityemed" name="specialityemed" ng-model="annee" value="<?php echo $ro['specialitemed'];?>">
                 
              </div>

              <div class="form-group">
                <label for="prenom">Poste:</label>
                <input type="text" class="form-control" id="postemed" name="postemed" ng-model="annee" value="<?php echo $ro['postemed'];?>">
                 
              </div>

              <div class="form-group">
                <label for="prenom">Date d&prime;embauche:</label>
                <input type="date" class="form-control" id="embauchemed" name="embauchemed" ng-model="annee" value="<?php echo $ro['dateembauche'];?>">
                 
              </div>

              <div class="form-group">
                <label for="prenom">Experience:</label>
                <input type="number" class="form-control" id="Experiencemed" name="Experiencemed" ng-model="annee" value="<?php echo $ro['anneeexper'];?>">
                 
              </div>

              <div class="form-group">
                <label for="prenom">Téléphone:</label>
                <input type="number" class="form-control" id="telmed" placeholder="XXXXXXXXX" name="telmed" ng-model="tel" value="<?php echo $ro['telmedecin'];?>">
              </div>

             
              <div class="form-group">
                <label for="exampleInputEmail1">Email address:</label>
                <input type="email" class="form-control" id="emailmed" placeholder="Email" name="emailmed" ng-model="email" value="<?php echo $ro['emailmed'];?>">
              </div>
             
              <input type="submit" class="btn btn-primary" value="Créer mon compte" name="save_doctor">
            </form>
            <?php
               }
}

?>
            </div>
<div class="col-md-2">
</div>

            </div>
            </div>
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

if($_GET['id']){

    $zon=$_GET['id'];

    $sql_show=mysql_query("select *from appointment where id='$zone' limit 1") or die(mysql_error());
    while($ro=mysql_fetch_array($sql_show)){
        ?>
 
  <form action="" name="myForm2" method="post" onsubmit=" return validateappointment()" >
              <div class="form-group">
                <label for="nom">Demand Type:</label>
                <input type="text" class="form-control" id="demandt"  name="demandt" ng-model="nom" value="<?php echo $ro['demandtype'];?>">
              </div>
              <div class="form-group">
                <label for="prenom">Date of Appointment:</label>
                <input type="text" class="form-control" id="dateappoint"  name="dateappoint" ng-model="prenom" value="<?php echo $ro['dateappoint'];?>">
              </div>
                         
               
              </div>
              <div class="form-group">
                <label for="prenom">Day:</label>
                <input type="number" class="form-control" id="day" name="day" ng-model="annee" value="<?php echo $ro['day'];?>">
                 
              </div>
              <div class="form-group">
                <label for="prenom">Hour:</label>
                <input type="text" class="form-control" id="hour" name="hour" ng-model="annee" value="<?php echo $ro['hour'];?>">
                 
              </div>
              <input type="submit" class="btn btn-primary" value="Send" name="appontment">
            </form>
            <?php
               }
}

?>
            </div>
<div class="col-md-2">
</div>

            </div>
            </div>
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
