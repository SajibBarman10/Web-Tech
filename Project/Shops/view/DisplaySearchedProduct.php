<?php  
require_once '../controller/SearchProduct.php';




   



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1px">
	<thead>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Image</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($searched_data as $i => $product): ?>
			<tr>
				<td><a href=""><?php echo $product['Name'] ?></a></td>
				<td><?php echo $product['Price'] ?></td>
				<td><?php echo $product['Quantity'] ?></td>
				<td><?php echo $product['image'] ?></td>
				<td><img width="100px" src="../uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['Name'] ?>"></td>
				<td><form>Discount:<input type="text"><input type="submit" value="Apply"></td>
				<td>Status<select><option>Available</option><option>Unvailable</option></select></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>