<html>
<body>
	<head>
	<script src="js/Edit Profile.js"></script>
	 <style>
body {
  background-color: lightblue;
}
</style>


	</head>
<fieldset>
<?php

session_start();
include '../controller/include/head.php';

if(!isset($_SESSION["usname"]))
{
    header("Location: Lab4_login.php");
}
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
<legend>Profile</legend>
<form method="POST" onsubmit="return isValid()" name="LForm">
Name:<input type="text"  name="name"value="<?php echo $_SESSION['name'];?>"><span id="name" style="color: red;"> *</span> <br><br>
User Name:<input type="text"  name="usname"value="<?php echo $_SESSION['usname'];?>"><span id="uname" style="color: red;"> *</span><br>
Email: <input type="text" name="email"value="<?php echo $_SESSION['email'];?>"><span id="email" style="color: red;"> *</span><br>
Date of Birth: <input type = "text" name = "dd" value="" width=100>/&nbsp <input type = "text" name = "mm" width=100>/&nbsp <input type = "text" name="yy" width=100> (dd/mm/yyyy)</fieldset>

<!-- Date of Birth:<input type="text" value="<?php echo "".$_SESSION['dd']."/".$_SESSION['mm']."/".$_SESSION['yy'].""?>"><br> -->
Gender: <input type="radio"  name="gender"value="male" id="male" <?php if($_SESSION['gender']=='Male') echo "checked";?>>Male
 <input type="radio" name="gender"value="female" id="female" <?php if($_SESSION['gender']=='female') echo "checked";?>>Female
 <input type="radio" name="gender"value="other" id="other" <?php if($_SESSION['gender']=='other') echo "checked";?>>Other
 <span id="gender" style="color: red;"> *</span> <br>
 <input type="submit" name="submit">

</fieldset>
</form>
</fieldset>
<?php include "../controller/edit-profile-action.php" ?>
</td>
</table>
<fieldset>
<?php include '../controller/include/footer.php'?>
</fieldset>
</body>

</html>