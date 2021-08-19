<?php
     require_once 'controllers/loginController.php';

	?> 
<html>
    <head>
	<title>LOGIN </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" href="styless.css">
	</head>
	<body>
	<div class="login-div">
	 <fieldset>
        <legend align="center"><h1>Login</h1></legend>
	   
	   <form action="" method="post">
	       <table align="center">
		        <tr>
				     <td><span><b>Username<b></span></td>
					<td>:<input type="text" name="uname" value="<?php {if(isset($_COOKIE['uname'])) echo $_COOKIE['uname'];}?>" placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
			    </tr>
				<tr>
				     <td><span><b>Password</b></span></td>
					<td>:<input type="password" value="<?php {if(isset($_COOKIE['password'])) echo $_COOKIE['password'];}?>" name="pass" placeholder="Password">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
				<td><input type="submit" name="login" value="Login"></td>
				<td><input type="checkbox" name="remember">Remember me</td>
				</tr>
		      </table>
			  </form>
			  <center><a style="text-decoration:none" href="registration.php" target="_blank" >Not registred yet? Sign up</a></center>
			  </fieldset>
	</div>
	
    </body>
</html>	