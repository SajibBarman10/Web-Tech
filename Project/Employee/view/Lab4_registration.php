<!doctype html>
<html>
<head>
<style>
.error{
  color:red;
}

</style>
<script src="js/Lab4_registration.js"></script>

<link rel="stylesheet" href="css/index.css">
</head>
<body>
<fieldset>
<?php
session_start();

 include '../controller/include/head.php';?>
</fieldset>
<?php include "../controller/reg-action.php" ?>
 <fieldset>
<form action = "" method = "post" onsubmit="return isValid()" name="LForm">
<fieldset>
<legend>Registration</legend>
<table>
<tr><td>Name</td><td>:<input type = "text" name="name" class="form-control"><span id="name"><?php echo $name_err;?></span></br></td></tr>

<tr><td>Email</td><td>:<input type = "text" name="email" class="form-control"><span id="email"><?php echo $email_err;?></span></br></td></tr>

<tr><td>User Name</td><td>:<input type = "text" name="usname" class="form-control"><span id="usname"><?php echo $uname_err;?></span></br></td><tr>

<tr><td>Password</td><td>:<input type = "password" name="pass" class="form-control"><span id="pass"><?php echo $pass_err;?></span></br></td></tr>

<tr><td>Confirm Password</td><td>:<input type = "password" name="cpass" class="form-control"><span id="cpass"><?php echo $cpass_err;?></span></br></td></tr>
</table>
<hr/>
<fieldset>
<legend>Gender</legend>
<input type = "radio" name="gender" value="Male">Male&nbsp <input type = "radio" name="gender" value="Female">Female&nbsp <input type = "radio" name="gender" value="Other">Other
<span id="gender"><?php echo $gender_err;?></span>
</fieldset> 
<hr/>
<fieldset>

<legend>Date of Birth:</legend>
<input type = "text" name = "dd" width=100>/&nbsp <input type = "text" name = "mm" width=100>/&nbsp <input type = "text" name="yy" width=100> (dd/mm/yyyy)</fieldset>
<span class="error"><?php echo $date_err;?></span>
<hr/>
<input type = "submit" class="submit" name="submit">&nbsp &nbsp <input type = "button" class="submit" value = "Reset">
</fieldset>
</form>
<?php echo $message;
echo $error;
  ?>
  </fieldset>
  <fieldset>
  <?php include '../controller/include/footer.php'?>

  </fieldset>
</body>
</html>