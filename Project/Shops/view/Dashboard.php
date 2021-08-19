<!doctype html>
<html>
<body>
<?php
session_start(); 
 require_once 'head.php'?>
 
 <div class="box">
 <?php if(isset($_SESSION['shop_name'])) 
	 echo "<h1><i>Welcome ".$_SESSION['shop_name']."</i></h1>";
	else
		echo "<h1><i>Session Expired!</i></h1>";?>
 </div>
 <?php require_once 'foot.php';?>
</body>
</html>