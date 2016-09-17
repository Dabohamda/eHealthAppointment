<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Appointment details</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
     <link href="css/signin.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">

    
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    
  </head>
<body>
<div class="container">
  <h4 style="background:#003979;color:#fff;padding:15px;text-align:center">Appointment Details</h4>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
<?php
include('php/db.php');
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
<div class="col-md-4">
</div>
 <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>