<html>
<body>
     <head>
     <script src="js/Change Pass.js"></script>
     <style>
body {
  background-color: lightblue;
}
</style>

     </head>
<fieldset>
<?php
session_start();
if(!isset($_SESSION["usname"]))
{
    header("Location: Lab4_login.php");
}
?>
<?php
 include '../controller/include/head.php';
 
 $pass_error = "";
?>
</fieldset>
<table>
<td>
<fieldset style="height:270px;width:300px">
<h3>Account</h3> &nbsp &nbsp 
<hr/>
<ul>
<li><a href="Account.php">Dashboard</a></li>
<li><a href="Profile.php">View Profile</a></li>
<li><a href="Edit Profile.php">Edit Profile</a></li>
<li><a href="Change Propic.php">Change Profile Picture</a></li>
<li><a href="Change Pass.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</fieldset>
</td>
<td>
<fieldset style="height:270px">
<fieldset>  
<form method="POST" onsubmit="return isValid()" name="LForm">  
<legend>Change Password</legend>
<table>
<tr><td align = "left">Current Password</td><td align = "right">:<input type = "text" name = "curpass" value="<?php echo  $_SESSION['pass'];?>">    <span id="Uerror" style="color: red;"> * <?php echo $pass_error;  ?></span></td> <br><br>
<tr><td align = "left"><span style = "color:green;">New Password</span></td><td align = "right">:<input type = "text" name="newpass"> <span id="Perror" style="color: red;"> * <?php echo $pass_error;  ?></span> </td> <br><br>
<tr><td align = "left"><span style = "color:red;">Retype New Password</span></td><td align = "right">:<input type = "text" name="rnewpass"></td>
</table>
<br>
<hr/>
<input type = "submit" name="submit">
</form>
<?php include "../controller/change-pass-action.php";?>
</fieldset>
</fieldset>
</td>
</table>
<fieldset>
<?php include '../controller/include/footer.php'?>
</fieldset>
</body>

</html>