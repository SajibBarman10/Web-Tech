<!doctype html>
<html>
	<head>




















	<script src="js/Lab4_login.js"></script>

	</head>
	<link rel="stylesheet" href="css/index.css">
<body>
<fieldset>
<?php session_start();
include '../controller/include/head.php';?>
</fieldset>
<?php include "../controller/login-action.php" ?>
 <fieldset>
<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " onsubmit="return isValid()" name="LForm">
<fieldset>
<legend>LOGIN</legend>
<h2>Username:</h2><input type = "text" name="usname" value="<?php {if(isset($_COOKIE['us'])) echo $_COOKIE['us'];}?>"><span id="usname" style="color: red;"> * </span> <br><br>
<h2>password:</h2><input type = "password" name="pass" value="<?php {if(isset($_COOKIE['password'])) echo $_COOKIE['password'];}?>"><span id="pass" style="color: red;"> * </span> <br>
<hr/>

<input class="submit" type = "submit"> <br><a href="Lab4_Forgotpass.php">Forgot password</a>

</fieldset>
</form>
</fieldset>
<fieldset>
<?php include '../controller/include/footer.php'?>
</fieldset>
<?php
 echo $error;
 ?>
</body></html>