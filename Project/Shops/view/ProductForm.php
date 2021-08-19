<!doctype html>
<html>
<body>

<!--<form action="../controller/AddProduct.php"  method="post" enctype="multipart/form-data">-->
<table>
<tr><td>Product Name:</td><td><input type="text" name="pn"><span id="1" class = "error"></span></td></tr>
<tr><td>Product Quantity:</td><td><input type="text" name="qnt"><span id="2" class = "error"></span></td></tr>
<tr><td>MRP(Tk.):</td><td><input type="text" name="pc"><span id="3" class = "error"></span></td></tr>
<tr>

<td>Add Picture</td><td align="right"><input type="file" name="image" value="Blank"></td>
</tr>
<tr><td></td><td><button  type="button" name="submit" onclick="AddProduct()">Submit</button></td></tr>
</table>
<!--</form>-->


</body>
</html>