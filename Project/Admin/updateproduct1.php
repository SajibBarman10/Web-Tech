<?php

require_once "controllers/productController.php" ;
$id = $_GET["id"];
$product = getProducts($id) ;
?>

<html>
      <head>
	  <title>Update Product</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link rel="stylesheet" href="styless.css">
	  <head>
	  
	     <body>
		 <div class="r-div">
		 <fieldset>
        <legend align="center"><h1>Update Product</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			         
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $product["id"];?>"></td> 
					 </tr>
					    
                     <tr>
				             <td><span><b>Product name:<b></span></td>
					       <td><input type="text" name="pname" value="<?php echo $product["pname"];?>" placeholder="Product Name"></td><br>
					 </tr>
					       <tr>
					       	<td><span><b>Buying price:<b></span></td>
					       <td><input type="text" name="bprice" value="<?php echo $product["bprice"];?>" placeholder="Product Name"></td><br>
					 </tr>
					      
					<tr> 
					      <td><span><b>Selling price:<b></span></td>
					       <td><input type="text" name="sprice" value="<?php echo $product["sprice"];?>" placeholder="Product Name"></td><br>
					 </tr>
			          

				        
					   
				        
					    <tr>
				             <td><input type="submit" name="update" value="Update"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		  </fieldset>
		 </body>
		 
</html>