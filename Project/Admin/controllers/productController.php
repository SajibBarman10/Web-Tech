<?php

require_once 'models/db_config.php' ;	
     $pname = $bprice = $sprice = "";
	 $err_pname= $err_bprice = $err_sprice = "";

	 	 
	 $hasError=false;
	 
	 
	 
	 
	  
	 
	 if (isset($_POST["submit"])){
		
			if (empty($_POST["pname"])){
				$err_pname="Name is required";
				$hasError=true;
			}
			else{
				$pname=htmlspecialchars($_POST["pname"]);
			}
			
			If (empty($_POST["bprice"])){
				$err_bprice="Buying price is required";
				$hasError=true;
			}
			else{
				$bprice=htmlspecialchars($_POST["bprice"]);
			}
            If (empty($_POST["sprice"])){
				$err_sprice="Selling price is required";
				$hasError=true;
			}
			else{
				$sprice=htmlspecialchars($_POST["sprice"]);
			}
			
		   if(!$hasError)
		   {
					   insertProduct($pname,$bprice,$sprice);
					   header("Location: allProduct.php");

		   }
            

	 }
	 
	

     //Insert
     function insertProduct($pname,$bprice,$sprice)
     {
        $query = "INSERT INTO product VALUES (NULL,'$pname','$bprice','$sprice')" ;
        return execute($query) ; 
	}
  
     
     

   //Delete
   if(isset($_POST["delete"]))
	{
		deleteProduct($_POST["id"]); 
	} 
    function deleteProduct($id)
	{
		$query = "DELETE FROM product WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: allProduct.php");
	} 

	//Update  
	if(isset($_POST["update"])){
		editProduct($_POST["id"],$_POST["pname"],$_POST["bprice"],$_POST["sprice"]);
		header("Location: allProduct.php");
	}
	function editProduct($id,$pname,$bprice, $sprice){
		$query = "update product set pname = '$pname', bprice ='$bprice', sprice ='$sprice' where id = $id";
		echo $query ;
		execute($query);
		
	} 

    //View
    function getProducts($id)
    {
        $query = "select * from product where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
    function getAllProducts()
    {
        $query = "select * from product" ;
        $result = get($query) ;
        return $result ;
    }
   
    ///Ajax
	function checkbpriceValidity($bprice){
		$query = "select * from product where bprice='$bprice'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
    
	 ////Search
	 function searchProduct($key)
	 {
		 $query = "select id, pname, bprice, sprice from product where pname like '%$key%'";
		 $result = get($query) ;
		 return $result ; 
	 }

?>