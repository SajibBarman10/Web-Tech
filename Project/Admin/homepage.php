
<?php
      session_start();
      require_once "controllers/productController.php" ;
	  $products = getAllProducts();
?>
<html>
  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="styless.css">
		   
        <body class="h1">
        	
		    <center><h1 class="h1">HOMEPAGE</h1><center>
			<?php 
				echo "<b> WELLCOME</b> ";
				echo " ";
				echo $_SESSION["username"]; 
			?>

			<table></table>


		    <h1>
			<tr> 
			
			<td><a href="addProduct.php" class="btn-link">Add Product</a></td> <br>
			<td><a href="removeProduct.php" class="btn-link">Remove Products</a></td> <br>
			<td><a href="allProduct.php" class="btn-link">View products</a></td><br>
			<td><a href="searchProduct.php" class="btn-link">Search Products</a></td><br>
			<td><a href="logout.php" class="btn-link">Log Out</a></td><br>

			</h1>
			 </tr>
			</table>
			<table align = "center">
		<tr>   
        </body>

</html>
