<!doctype html>
<html>
<body>
<?php session_start();
require_once 'head.php'?>
<?php
require_once '../Model/model.php';
$sn_err = $ps_err = "";

//if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST["login"])){
	
		
	if(empty($_POST['sn']))
		$sn_err = "*shop name is required";
	if(empty($_POST["ps"]))
		$ps_err = "*password is required";
	if($sn_err == "" && $ps_err == ""){
		$data = fetchProfile($_POST['sn']);
		if($data['Password'] == $_POST['ps']){
			$_SESSION['shop_name'] = $data['Name'];
			$_SESSION['email'] = $_POST['sn'];
			$_SESSION['flag'] = 1;
			header("Location:Dashboard.php");
	}
		else
			$ps_err = "Invalid Password";
		
	
	
						   
                         }
	$_COOKIE['shop'] = "";
	$_COOKIE['keys'] = "";
	
	if(isset($_POST["save"]))
	{
		setcookie('shop',$_POST['sn'],time()+30);
		setcookie('keys',$_POST['ps'],time()+30);
	}
}

?>
<div class="box">
<form id="login"  method="post">
<center><h1>Login</h1></center>

<input type="text" placeholder="Shop Email" name='sn' value="<?php if(isset($_COOKIE['shop'])) echo $_COOKIE['shop'];?>">
<h5 class="error"><?php echo $sn_err;?></h5>
<input type="password" placeholder="Password" name='ps' value="<?php if(isset($_COOKIE['keys'])) echo $_COOKIE['keys'];?>">
<h5 class="error"><?php echo $ps_err;?></h5>
<input type="checkbox" name="save"><span>Save Password</span>
<br>
<br>



<input type="submit" name="login">
</form>
</div>
<?php require_once 'foot.php'?>
</body>
</html>