<?php
	require_once "controllers/productController.php" ;
	$products = getAllProducts() ;
?>

<html>
      <head>
	  <title>Search Products</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link rel="stylesheet" href="styless.css">
	  <head>
	  
	     <body>
		 <div class="r-div">
		 <fieldset>
        <legend align="center"><h1>Search Product</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			             <!---->
					   <tr>
					        
					       <td> 
						   		<div id="">
								   <input style="width: 100%; height: 24px;" type="text" id="search_text"  
								   onkeyup="suggest(this)" placeholder="search...">
								   <p id="suggestion">

								   </p>	
								</div>  
						   </td>
			          </tr>
							
					       
				</table>
             </form>
			 <div>
		  </fieldset>
		  <script>
	             function suggest(control)
				 {
					var key = control.value;
						
						var xhttp = new XMLHttpRequest();
						if(key == "")
						{
							document.getElementById("suggestion").innerHTML = "" ;
							return;								
						}
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								document.getElementById("suggestion").innerHTML = this.responseText ;
							}
						};
						xhttp.open("GET","searchForProduct.php?key="+key,true);
						xhttp.send();
				 }
		  </script>
		 </body>
</html>