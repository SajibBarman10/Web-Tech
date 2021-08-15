<?php

include "../model/model.php";

 $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info`  ";

 

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //return $rows;


 foreach($data as $row)
 {
	                             $_SESSION['usname'] = $row['usname'];
	                             $_SESSION['pass'] = $row['pass'];
	                             $_SESSION['name'] = $row['name'];
	                             $_SESSION['email'] = $row['email'];
									$_SESSION['pass']=$row['pass'];
									$_SESSION['gender']=$row['gender'];
									$_SESSION['dd']=$row['dd'];
									$_SESSION['mm']=$row['mm'];
									$_SESSION['yy']=$row['yy'];
								
									break;
	 
 }
	if($_SERVER["REQUEST_METHOD"]=="POST"){	

	
	

	$data['name'] = $_POST['name'];
	$data['usname'] = $_POST['usname'];
	$data['email'] = $_POST['email'];
	
	$data['gender'] = $_POST['gender'];
	$data['dd'] = $_POST['dd'];
	$data['mm'] = $_POST['mm'];
	$data['yy'] = $_POST['yy'];

	if (updateInfo($data)) {
		echo 'Info updated.';
	}
  
  else {
	  echo 'While there is an error';
  }
}

			
	
?>