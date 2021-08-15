<html>
<body>
	<head>

	</head>
	<link rel="stylesheet" href="css/profile.css">

<fieldset>
<?php include "../controller/profile-action.php";
include '../controller/include/head.php';
?>
</fieldset>
<table>
<td>
<fieldset class="fieldset1" style="height:270px;width:300px">
<h3>Account</h3> &nbsp &nbsp 
<hr/>
<ul>

<li><a href="Profile.php">View Profile</a></li>

<li><a href="show-user.php">show user</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</fieldset>
</td>
<td>
<fieldset class="fieldset2" style="height:270px">
<fieldset>    
<legend>Profile</legend>
Name: <?php echo $_SESSION['name']; ?>
<?php echo "<br>" ?>
email: <?php echo $_SESSION['email']; ?>
<?php echo "<br>" ?>
username: <?php echo $_SESSION['usname']; ?>
<?php echo "<br>" ?>

Gender: <?php echo $_SESSION['gender'];?>
<?php echo "<br>" ?>

Date of Birth: <?php echo "".$_SESSION['dd']."/".$_SESSION['mm']."/".$_SESSION['yy'].""?>
</fieldset>
</fieldset>
</td>
</table>
<fieldset>
<?php include '../controller/include/footer.php'?>
</fieldset>
</body>

</html>