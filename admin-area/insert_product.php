<?php

	require 'connection.php';

	if (isset($_POST['submit'])) 
	{
		$product_id 		= $_POST['product_id'];
		$product_code 		= $_POST['product_code'];
		$product_name 		= $_POST['product_name'];
		$product_details 	= $_POST['product_details'];
		$product_price 		= $_POST['product_price'];
		$product_quantity	= $_POST['product_quantity'];

		$product_image 		= $_FILES['product_image']['name'];
		$product_tmp_name	= $_FILES['product_image']['tmp_name'];

		$image_destination	= "admin-images/".$product_image;

		if (move_uploaded_file($product_tmp_name, $image_destination)) 
		{
			$insert = "INSERT INTO `product_details`(`product_id`, `product_code`, `product_name`, `product_details`, `product_price`, `product_quantity`, `product_image`) VALUES('$product_id', '$product_code', '$product_name', '$product_details', '$product_price', '$product_quantity', '$product_image')";

			$insert_query = mysqli_query($connection, $insert);

			if($insert_query)
			{
				header("location: home.php");

				echo "<script> alert('product inserted successfully') </script>";
			}
		}
	}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert-product</title>

	<link rel="stylesheet" href="../CSS/style.css">
</head>

<body>

<div class="container">
	<div class="form-container">
		<form action="insert_product.php" method="post" enctype="multipart/form-data">
			<div class="form-label">
				<label for="product id"> Product ID </label>
				<input type="text" name="product_id" placeholder="Product ID">
			</div>

			<div class="form-label">
				<label for="product code"> Product Code </label>
				<input type="text" name="product_code" placeholder="Product Code" required>
			</div>
			
			<div class="form-label">
				<label for="product name"> Product Name </label>
				<input type="text" name="product_name" placeholder="Product Name" required>
			</div>

			<div class="form-label">
				<label for="product details"> Product Details </label>
				<input type="text" name="product_details" placeholder="Product Details" required>
			</div>

			<div class="form-label">
				<label for="product price"> Product Price </label>
				<input type="text" name="product_price" placeholder="Product price" required>
			</div>

			<div class="form-label">
				<label for="Quantity"> Product Quantity </label>
				<input type="text" name="product_quantity" placeholder="Product Quantity" required>
			</div>

			<div class="form-label">
				<label for="product image"> Product Image </label>
				<input type="file" name="product_image" required>
			</div>
			
			<div class="form-label">
				<input type="submit" name="submit" value="submit">
			</div>
		</form>
	</div>
</div>

</body>
</html>

