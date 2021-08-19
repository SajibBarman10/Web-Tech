<?php

require_once "controllers/productController.php" ;
$id = $_GET["id"];
$product = getProducts($id) ;
?>

<html>
      <head>
	  <title>Remove Product</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link rel="stylesheet" href="styless.css">
	  <head>
	  
	     <body>
		 <div class="r-div">
		 <fieldset>
        <legend align="center"><h1>Remove Product</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			         
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $product["id"];?>"></td> 
					 </tr>
					    
                     <tr>
				           <td><span><b>pname:<b></span></td>
					       <td><input type="text" name="pname" value="<?php echo $product["pname"];?>" placeholder="Product Name"><br>
						    
			          </tr>

				        
					   
				        
					    <tr>
				             <td><input type="submit" name="delete" value="Remove"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		  </fieldset>
		 </body>
		 
</html>