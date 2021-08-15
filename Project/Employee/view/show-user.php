<?php
session_start();
if(!isset($_SESSION["usname"]))
{
    header("Location: ./Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/user-action.js"></script>
    <title>Document</title>
    <style>

.Search{
    font-size: 18px;
    color: whitesmoke;
    
    background-color: brown;
    
}
    </style>
 
</head>
<body style="background-color:antiquewhite ">

<?php 
// require "../controllers/includes/header.php";
// require "../controllers/includes/sidebar_links.php";
require "../controller/include/head.php";
?>
<div class="user-search">
<form action="show.php" method="GET" name="Sform" onsubmit="Result(this); return false;">
    <fieldset>
        <legend>View User Details</legend>
        <label for="usname">User Name :</label>
        <input type="text" id="usname" name="usname" >

        <br> <br>
        <input type="submit" class="Search" name="submit" value="Search">  <br> <br>
        <div id="result"><b>Person info will be listed here...</b></div>



</form>

</div>

</fieldset>


<script >
                  function Result(pform) {
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET",pform.action + "?usname=" +pform.usname.value);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send();
       }
              </script>
<?php

 require "../controller/include/footer.php";

?>

</body>
</html>