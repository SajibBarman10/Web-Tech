<!doctype html>
<html>
<body>
<?php
session_start(); 
 require_once 'head.php'?>
 
 <div class="box">
<button id="addp" onclick="loadForm()">Add Product</button></a>
 <button id="search" onclick="loadSearch()">Search Product</button>
 <button id="viewp" onclick="loadProduct()">View Product</button>
 <div  id="containerP"></div>
 </div>
 <?php require_once 'foot.php';?>
 
 <script>
function loadForm() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("containerP").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ProductForm.php", true);
  xhttp.send();
} 

    /*var Name = document.getElementsByName("pn")[0].value;
	var Quantity = document.getElementsByName("qnt")[0].value;
	var Price = document.getElementsByName("pc")[0].value;
	var Image = document.getElementsByName("image")[0].value;
	var url = "name=" + Name + "&qnt=" + Quantity + "&price="+ Price "img=" +  Image;*/
	
function AddProduct(){
	var check = true;
	var Name = document.getElementsByName("pn")[0].value;
	var Quantity = document.getElementsByName("qnt")[0].value;
	var Price = document.getElementsByName("pc")[0].value;
	var Image = document.getElementsByName("image")[0].value;
	var url = "name=" + Name + "&qnt=" + Quantity + "&price="+ Price + "&img=" + Image;
	
	 var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("containerP").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "AddProduct.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(url);
 /*if(!boolean(Name))
	 check = false;
 if(!boolean(Quantity))
	 check = false;
 if(!boolean(Price))
	 check = false;
 if(check==false){
	 document.getElementById("1").innerHTML="Name required";
	 document.getElementById("2").innerHTML="Quantity required";
	 document.getElementById("3").innerHTML="Price required";
 }*/
  alert(url);
}

function loadProduct(){
	 var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("containerP").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "DisplayProducts.php", true);
//  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();
}
function loadSearch() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("containerP").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "Search.php", true);
  xhttp.send();
} 
function search(){
		var Search = document.getElementsByName("srch")[0].value;
	
	
	var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("containerP").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "DisplaySearchedProduct.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("search="+Search);
 
  alert(Search);
}

</script>
</body>
</html>
