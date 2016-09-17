<?php
  include('php/db.php');
    function count_client(){
  $sql_count=mysql_query("select count(*) as total from medecins ");
  while($ct=mysql_fetch_array($sql_count)){
    $coun=$ct['total'];
    return $coun;
    
    }
  }
  ?>

<!DOCTYPE html>
<html lang="en" ng-app="myApp" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Doctor Profile</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
     <link href="css/signin.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">

    
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background:#003979;color:white">
      <div class="container" style="background:#003979;color:white">
        <div class="navbar-header" style="background:#003979;color:white">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:#fff">EHealth</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav" >
            <li class="active"><a href="#">Accueil</a></li>
            <li><a href="#about" style="color:#fff">Council & Tips</a></li>
         
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" style="color:#fff" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compte <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php" style="color:#000">Connect</a></li>
                <li><a href="create.html" style="color:#000">Create account</a></li>
              </ul>
            </li>
            <li><a href="#contact" style="color:#fff">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
          <li role="presentation"><a href="#appointement" aria-controls="appointement" role="tab" data-toggle="tab">Add Appointement </a></li>
          <li role="presentation"><a href="appointmentdetails" aria-controls="book" role="tab" data-toggle="tab"> Appointment Details</a></li>
          <li role="presentation"><a href="index.php">Logout</a></li>
        </ul>
        </br>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="profile" ng-controller="StoreController as profils">
            <div class="row">
            <?php
  $limit = 7;  
if (isset($_GET["page"])) { 
  $page  = $_GET["page"]; 
  
  } 
  else { 
  $page=1; 
  }
$start_from = ($page-1) * $limit;  
  
$sql1 = "SELECT *FROM medecins LIMIT $start_from, $limit";  
$rs_result = mysql_query ($sql1) or die(mysql_error());  
?>  
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th class="bg-info">action</th>   
<th  class="bg-info">Firstname</th>  
<th class="bg-info">Lastname</th>
<th class="bg-info">Date of birth</th>
<th class="bg-info">Sexe</th>
<th class="bg-info">Speciality</th>
<th class="bg-info">Position</th>
<th class="bg-info">Engagement date</th>
<th class="bg-info">Experience</th>
<th class="bg-info">Phone</th>
<th class="bg-info">Email</th>
</tr>  
<thead>  
<tbody>  
<?php  
while ($row = mysql_fetch_assoc($rs_result)) {  
?>   
            <tr style="font-size:10px"> 
        <td style="width:130px">
       <a  class="btn btn-primary" class="icon-google-plus" title="" href="modify_doctor.php?id=<?php echo $row['idmedecin'];?> " onclick= "window.open(this.href, 'winname', 'width=427,height=530,left=300,top=50, directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0,scrollbars=no,resizable=no');return false;">
       <span class="glyphicon glyphicon-pencil"></span>
             </a>

          &nbsp;<a href="delete_doctor.php?id=<?php echo $row['idmedecin'];?>" title="Supprimer" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          
        
        
          </td> 
      <td STYLE="text-transform:uppercase"><?php echo $row['nommedecin']; ?></td> 
      <td STYLE="text-transform:uppercase"><?php echo $row['prenommedecin']; ?></td>
           <td><?php echo $row['datenaissance'];?></td>
           <td><?php echo $row['sexemedecin'];?></td>
           <td><?php echo $row['specialitemed'];?></td>
            <td><?php echo $row['postemed'];?></td>
             <td><?php echo $row['dateembauche'];?></td>
              <td><?php echo $row['anneeexper'];?></td>
              <td><?php echo $row['telmedecin'];?></td>
              <td><?php echo $row['emailmed'];?></td>
              

       
            
      
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>  
<?php  
$sql2 = "SELECT COUNT(*) FROM medecins";  
$rs_result1 = mysql_query($sql2);  
$row = mysql_fetch_row($rs_result1);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = '<div STYLE="text-align:center" class="pagination pagination-sm">';  
for ($i=1; $i<=$total_pages; $i++) {  
              $pagLink .= "<a class='page' style='text-align:center' href='panel.php?page=".$i."'>".$i."</a>&nbsp;";  
};  
echo $pagLink . "&nbsp;(".count_client().")Saved.</div>";  
?>
</li>
</ul>

</div>
       
         
             <br>

          </div>
          <div role="tabpanel" class="tab-pane" id="appointement">
            <form ng-controller="demandeController as demande">
              <div class="form-group">
                <label for="nom">demande Type </label>
                <select class="form-control" name="annee" ng-model="type">
                  <option>Consultation</option>
                  <option>Intervention</option>
                  <option>Maternité</option>
                  <option>Ophtamologie</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nom">Docteur</label>
                <select class="form-control" name="annee" ng-model="type">
                  <option>Moussa Traore</option>
                  <option>Fatou Sikhe</option>
                  <option>Hassane Diallo</option>
                  <option>Abdourahamane Diallo</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nom">Jour</label>
                <select class="form-control" name="annee" ng-model="jour">
                  <option>Lundi</option>
                  <option>Mardi</option>
                  <option>Mercredi</option>
                  <option>Jeudi</option>
                  <option>Vendredi</option>
                  <option>Samedi</option>
                  <option>Dimanche</option>
                </select>
              </div>
              <div class="form-group">
                <label for="prenom">Heure souhaitée &nbsp;</label>
                <label class="radio-inline">
                  <input type="radio" name="sexe" id="inlineRadio1" value="Matin" ng-model="heure"> Matin
                </label>
                <label class="radio-inline">
                  <input type="radio" name="sexe" id="inlineRadio2" value="Après-Midi" ng-model="heure"> Après-Midi
                </label>
              </div>
             <div class="form-group">
               <label for="prenom">Description</label>
               <textarea class="form-control" rows="3" name="adresse" ng-model="description"></textarea>
             </div>
              <button type="submit" class="btn btn-info" ng-click="demande.saveData()">send</button>
            </form>
          </div>
          <br>
<br>

          <div role="tabpanel" class="tab-pane" id="doctors">Doctors List</div>
        </div>
      </div>
    </div>
      <?php
  $limit = 7;  
if (isset($_GET["page"])) { 
  $page  = $_GET["page"]; 
  
  } 
  else { 
  $page=1; 
  }
$start_from = ($page-1) * $limit;  
  
$sql1 = "SELECT *FROM appointment LIMIT $start_from, $limit";  
$rs_result = mysql_query ($sql1) or die(mysql_error());  
?>  
<table class="table table-bordered table-striped">
  <thead>  
<tr>  
<th class="bg-info">Action</th>   
<th  class="bg-info">Demand Type</th>  
<th class="bg-info">Date</th>
<th class="bg-info">Day</th>
<th class="bg-info">Hour</th>

</tr>  
<thead>  
<tbody>
 <?php  
while ($row = mysql_fetch_assoc($rs_result)) {  
?>   
            <tr style="font-size:10px"> 
        <td style="width:130px">
       <a  class="btn btn-primary" class="icon-google-plus" title="" href="modify_doctor.php?id=<?php echo $row['id'];?> " onclick= "window.open(this.href, 'winname', 'width=427,height=530,left=300,top=50, directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0,scrollbars=no,resizable=no');return false;">
       <span class="glyphicon glyphicon-pencil"></span>
             </a>

          &nbsp;<a href="delete_doctor.php?id=<?php echo $row['id'];?>" title="Supprimer" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          
        
        
          </td> 
         
       <td STYLE="text-transform:uppercase"><?php echo $row['demandtype']; ?></td> 
      <td STYLE="text-transform:uppercase"><?php echo $row['dateAppoint']; ?></td>
           <td><?php echo $row['day'];?></td>
           <td><?php echo $row['hour'];?></td>
          
            
              
              

       
            
      
            </tr>  
<?php  
};  
?>  
</tbody>
</table>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">&#000; Copyright eHealth Academy Aout-September 2016. All rights reserved</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
  </body>
</html>
