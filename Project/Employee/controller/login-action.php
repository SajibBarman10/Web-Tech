<?php 
include "../model/model.php";

$name = $pass = $error = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
	   
	$usname = $_POST['usname'];
	$pass = $_POST['pass'];
            

	
	
		$conn = db_conn();
		$selectQuery = "SELECT * FROM user_info ";
	
	 
	
		
		try{
			$stmt = $conn->query($selectQuery);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($rows as $data)
		{

		
			if($data['usname']==$_POST['usname'] && $data['pass']==$_POST['pass']){
				echo "ass";
				$_SESSION['usname']=$usname;
				header("location: Profile.php");

			}
		}
	
	// if (login($usname,$pass)) {
		
	// }
	 
	}
 
 ?>