<!doctype html>
<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php 
session_start();
$_SESSION['flag'] = 0;
require_once 'head.php';
?>

<div class="box">
<center>Thanks for visiting us</center>
</div>
<?php require_once 'foot.php'?>

</body>
</html>