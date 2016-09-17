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
  </head>

  <body>
<?php
if (isset($_POST['send'])) {
  if(!empty($_POST['dmdtype'])) {

}
else
{

$doct_appt = mysql_real_escape_string($_POST['doct']);
  $dmdtype = mysql_real_escape_string($_POST['dmdtype']);
  $apptdate = mysql_real_escape_string($_POST['apptdate']);

  $day = mysql_real_escape_string($_POST['day']);
  $hour = mysql_real_escape_string($_POST['hour']);
 
  $numero_doct = mysql_real_escape_string(strtoupper(substr($doct_appt, 0, 2).rand(0, 1000).substr($dmdtype, 0, 3)));


  $ins_appt="insert into appointment(id,demandtype,dateAppoint,day, hour) values('','$doct_appt','$dmdtype','$apptdate','$day','$hour')";

  $sql_appt =mysql_query($ins_appt) or die(mysql_error());
  

  echo '<script>alert("New appointment recorded successfully");</script>';

}


}


?>


  <div class="container">
        <form action="" name="myForm"  method="post">


              <div class="form-group">
                <label for="prenom">Doctor: &nbsp;</label>
                
                 <div class="form-group">
                <label for="nom">Docteur</label>
                <select class="form-control" name="doct" ng-model="type">
                  <option>Moussa Traore</option>
                  <option>Fatou Sikhe</option>
                  <option>Hassane Diallo</option>
                  <option>Abdourahamane Diallo</option>
                </select>
              </div>
                
                 <div class="form-group">
                <label for="nom">Demand Type:</label>
                <select class="form-control" name="dmdtype" ng-model="type">
                  <option>Comsultation</option>
                  <option>Surgery</option>
                  <option>Maternity</option>
                  <option>Ophtamology</option>
                </select>
              </div>
        
                <label for="prenom">Appointment Date:</label>
                <input type="date" class="form-control" id="apptdate" name="apptdate" ng-model="annee">
              
                <label for="prenom">Day:</label>
                <input type="text" class="form-control" id="day"  name="day" ng-model="tel">
              
                <label for="prenom">Hour:</label>
                <input type="text" class="form-control" id="hour"  name="hour" ng-model="tel">
              
              
              <input type="submit" class="btn btn-success" value="Send" name="send">
            </form>
     
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

  </body>
    <script type="text/javascript" src="js/angular.min.js"></script>
   <!-- <script type="text/javascript" src="js/app.js"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </div>
  </body>
</html>
