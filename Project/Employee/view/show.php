

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
<body>
    


<?php 


include "../model/model.php";


if(isset($_GET['usname'])){
	$allSearchedUsers = searchUser($_GET['usname']);
    echo "<table>
<tr>
<th> ID</th>
<th> name</th>
<th> email</th>
<th> User name</th>


</tr>";

    echo "<tr>";
    echo "<td>" . $allSearchedUsers['ID']  . "</td>";
    echo "<td>" . $allSearchedUsers['name']  . "</td>";
    echo "<td>" . $allSearchedUsers['email']  . "</td>";
    echo "<td>" . $allSearchedUsers['usname']  . "</td>";
   
 
   
  
    ?>

   <?php 
  

    return;

}
else{
	
	
}
?>
<script >
                  function myFunction(val,user_id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET","../controllers/change.php?status="+val+"&user_id="+user_id,true);
      xhttp.send();
       }
              </script>
</body>
</html>