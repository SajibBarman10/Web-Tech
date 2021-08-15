<?php 
include "../model/model.php";

$name = $pass = $error = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
	   
	$usname = $_POST['usname'];
	$pass = $_POST['pass'];
            
	
	if (login($usname,$pass)) {
		$_SESSION['usname']=$usname;
		header("location: Profile.php");
	}
	 
	 }
 
 ?>