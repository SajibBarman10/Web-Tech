<?php
	require_once "controllers/productController.php" ;
	$products = getAllProducts();
?>

<html>
    <head> 
	     <title>ALL PRODUCT </title></head>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <link rel="stylesheet" href="styless.css">
	<body>
		<center><h1>ALL Product</h1></center>
		      <h2 align="center">
			        <span><a  style="text-decoration:none" href="addProduct.php" target="_self" >ADD PRODUCT &nbsp</a> </span> 
					<span><a  style="text-decoration:none" href="removeProduct.php" target="_self" >REMOVE PRODUCT  &nbsp</a> </span>
					<span><a  style="text-decoration:none" href="searchProduct.php" target="_self" >SEARCH PRODUCT &nbsp</a> </span>
					<span><a  style="text-decoration:none" href="homepage.php" target="_self" >BACK &nbsp</a> </span>

              </h2>
	<center>			
		<table border="1" style="border-collapse:collapse;">
		<thead>
				<th>Id</th>
				<th>Product Name</th>
                <th>Buying Price</th>
                <th>Selling Price</th>
                
				
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
                            		
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
			
			
		</table>
	<center>    
        </body>
</html>