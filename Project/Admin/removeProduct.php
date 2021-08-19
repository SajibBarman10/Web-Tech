<?php
	require_once "controllers/productController.php" ;
	$products = getAllProducts();
?>

<html>
    <head> 
	     <title>Remove Product</title></head>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <link rel="stylesheet" href="styless.css">
	<body>
		<center><h1>Removed Product </h1></center>
		     
	<center>			
		<table border="1" style="border-collapse:collapse;">
		<thead>
				<th>Serial</th>
				<th>Product Name</th>
				<th>Buying Price</th>
				<th>Selling Price</th>
                <th>Remove</th>
				
			</thead>
			<tbody>
				<?php
					foreach($products as $product)
					{
						echo "<tr>" ;
							echo "<td>".$product["id"]."</td>" ;
							echo "<td>".$product["pname"]."</td>" ;
							echo "<td>".$product["bprice"]."</td>" ;
							echo "<td>".$product["sprice"]."</td>" ;
							
							
							echo '<td><a href="removeproduct1.php?id='.$product["id"].'">Delete</a></td>';
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
			
			
		</table>
	<center>    
        </body>
</html>