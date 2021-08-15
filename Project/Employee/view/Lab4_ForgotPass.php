<! doctype html>
<html>
<body>
	<style>
body {
  background-color: lightblue;
}
</style>

<?php include '../controller/include/head.php';?>
<?php
session_start();
include "../model/model.php";
$error = $pass = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST"){
   
$data['usname']=$_POST["usname"];
$data['pass']=$_POST["pass"];
$data1 =	showAllStudents();
                
                          foreach($data1 as $row)  
                          {  
                             if($row["usname"]==$_POST["usname"])
							  {
								updatePass($data);
								
									
								
							  }
						  }
					
						   
}
 ?>
<fieldset>

</fieldset>
<fieldset>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<fieldset>
<legend>Forgot Password</legend>
user Name:<input type="text" name="usname">
new pass:<input type="password" name="pass">
<hr/>
<input type="submit">
</fieldset>
</form>
</fieldset>
<fieldset>
<?php include '../controller/include/footer.php';?>
</fieldset>
<?php echo $pass;?>
</body>
</html>