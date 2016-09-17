<?php
 <?php
	  if(isset($_POST['inputEmail'])){
			echo "<script type='text/javascript'>document.location.replace('user.php');</script>";
		  exit(0);
		  }
	  if(isset($_POST['inputPassword'])){
		
echo "<script type='text/javascript'>document.location.replace('user.php');</script>";
					
					
							else{
								
								$username=mysql_real_escape_string($_POST['inputEmail']);								
								$userpass=mysql_real_escape_string($_POST['inputPassword']);
															
								$sql_search=mysql_query("select * from utilisateur where username='$username' and password='$userpass'  limit 1") or die(mysql_error());
								if(mysql_num_rows($sql_search)>0){
								echo '<div class="alert alert-warning fade in"> <a href="#" class="close" data-dismiss="alert">&times;</a><strong>Warning</strong>:This user already exists in the database</div>';
									}
									else{
								
								$sql_insert="insert into user(id,username,Password) values('','$username','$userpass')";
								$ins=mysql_query($sql_insert) or die(mysql_error());
								if($ins){
									
									echo '<div class="alert alert-success fade in"> <a href="#" class="close" data-dismiss="alert">&times;</a><strong>New user:</strong>user added successfully</div>';
			
									}
									}
								
								}
		  }
	  ?>

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form class="form-signin">
        <h2 class="form-signin-heading text-center">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-success btn-block col-md-6" type="submit">Sign in</button>
        <div class="col-md-12 text-center">
        <br>
          Not registred ?<a class="" href="create.html"> Create an account</a>
        </div>
      </form>
</div>
</body>
</html>