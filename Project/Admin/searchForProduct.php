<style>
    .S {
        font-size:20px;
        transition:0.5s all ease;
    }
    .S:hover{
        color:green;

    }   
</style>

<?php
	require_once "controllers/productController.php" ;
	$key = $_GET["key"];
    $products = searchProduct($key) ;
    foreach($products as $product)
    {
        
          echo '<a class="S" style="text-decoration:none;" href="updateProduct.php?id='.$product["id"].'">
          '.$product["pname"].'</a><br/>';
    }
?>  