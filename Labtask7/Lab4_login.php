<!doctype html>
<html>
	<head>

	</head>
	<link rel="stylesheet" href="model/view/css/index.css">
<body>
<fieldset>
<?php session_start();
require_once 'model/model.php';

include 'head.php';?>
</fieldset>
<?php $name = $pass = $error = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
	   
	$usname = $_POST['usname'];
	$pass = $_POST['pass'];
            
	
	if (login($usname,$pass)) {
		$_SESSION['usname']=$usname;
		header("location: Profile.php");
	}
	 
	 }
 
 ?>
 <fieldset>
<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
<legend>LOGIN</legend>
<h2>Username:</h2><input type = "text" name="usname" value="<?php {if(isset($_COOKIE['us'])) echo $_COOKIE['us'];}?>"><br>
<h2>password:</h2><input type = "password" name="pass" value="<?php {if(isset($_COOKIE['password'])) echo $_COOKIE['password'];}?>">
<hr/>
<input type = "checkbox" name="remember" class="remember">Remember me<br>
<input class="submit" type = "submit"><a href="Lab4_Forgotpass.php">Forgot password</a>

</fieldset>
</form>
</fieldset>
<fieldset>
<?php include 'footer.php';?>
</fieldset>
<?php
 echo $error;
 ?>
</body></html>