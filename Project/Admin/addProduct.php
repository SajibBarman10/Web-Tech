<?php
    require_once "controllers/productController.php" ;
?>

<html>

      <head>
      <title>ADD PRODUCT</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="styless.css">
      
         <body>
         <div class="adduser-div">
      <fieldset>
        <legend align="center"><h1>ADD PRODUCT</h1></legend>
         
            <form action="" method="post" onsubmit="return validateBus()">
               <table align="center">
                       <tr>
                            <td><span><b>Product Name:</b></span></td>
                            <td><input type="text" id="bname" name="pname" value="<?php echo $pname;?>" size="" placeholder="Product Name"><br>
                            <span id="err_bname"><?php echo $err_pname;?></span></td>
                        </tr>
                        
                         <tr>
                            <td><span><b>Buying Price:</b></span></td>
                            <td><input type="text" id="dstation" name="bprice" value="<?php echo $bprice;?>" size="" placeholder="Buying Price"><br>
                            <span id="err_dstation"><?php echo $err_bprice;?></span></td>
                        </tr>
                        <tr>
                            <td><span><b>Selling Price:</b></span></td>
                            <td><input type="text" id="astation" name="sprice" value="<?php echo $sprice;?>" size="" placeholder="Selling Price"><br>
                            <span id="err_astation"><?php echo $err_sprice;?></span></td>
                        </tr>
                       
                        
                        <tr>
                             <td><input type="submit" name="submit" value="Add Product"></td>
                            <td><a style="text-decoration:none" href="allProduct.php">See Products &nbsp</a> </td> 

                        </tr>    
                            
                           
                </table>
             </form>
             <div>
         </fieldset>

         

         </body>
         <script src="JS/Validation.js"></script> 
</html>