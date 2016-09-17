<?php
  include('php/db.php');
   
   if($_GET['id']){

    $blue=$_GET['id'];
    $del="delete from medecins where idmedecin='$blue' ";
    $delet=mysql_query($del) or die(mysql_error());
    if($delet){
    	echo'<script>alert("Record deleted successfully");</script>';
    	header("location:panel.php");
    }
}
  ?>