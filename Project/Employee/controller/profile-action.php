<?php
include "../model/model.php";
session_start();
if(!isset($_SESSION["usname"]))
{
    header("Location: Lab4_login.php");
}
?>
<?php


 require_once '../model/db_connect.php';
 $conn = db_conn();
    $selectQuery = "SELECT * FROM user_info  ";

 

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //return $rows;


 foreach($data as $row)
 {
	 if($row['usname']==$_SESSION["usname"]){
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
	 
 }
						  ?>