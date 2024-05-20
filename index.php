<?php
	require 'connection.php';

	$select = "SELECT * FROM `product_details`";

	$select_query = mysqli_query($connection, $select);
	$count = mysqli_num_rows($select_query);

	if ($count>0) 
	{
		while ($row = mysqli_fetch_assoc($select_query)) 
		{
			$image = $row['product_image'];
			$price = $row['product_price'];
			$details = $row['product_details'];
		}
	}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>User-View</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="CSS/style.css">

</head>
<body>
	<header>
		<div class="navbar">
			<div class="nav-logo border">
				<div class="logo">
					
				</div>
			</div>

			<div class="nav-address border">
				<p class="add-first">Delivered to</p>
				<div class="add-icon">
					<i class="fa-solid fa-location-dot"></i>
					<p class="add-sec">Rangpur District</p>
				</div>				
			</div>

			<div class = "nav-search">
				<select class="search-select">
					<option> All </option>
				</select>
				<input type="search"  class="search-input">

				<div class="search-icon">
					<i class="fa-solid fa-magnifying-glass"></i>
				</div>
			</div>

			<div class="nav-signin border">
				<a href="login.php">
					<p class="nav-signin-text"><span>Hello, sign in</span></p>
					<p class="nav-signin-text nav-second">Account & Lists</p>
				</a>
			</div>

			<div class="nav-signin border">
				<p><span>Returns</span></p>
				<p class="nav-second">& Orders</p>
			</div>

			<div class="nav-cart border">
				<i class="fa-solid fa-cart-shopping"></i> Cart
			</div>
		</div>

		<div class="panel">
			<div class="panel-all">
				<i class="fa-solid fa-bars"></i>
				All
			</div>
			<div class="panel-ops">
				<p>Today's Deals</p>
				<p>Customer Service</p>
				<p>Registry</p>
				<p>Givt-Cards</p>
				<p>Sell</p>
			</div>
			<div class="panel-deals">
				Shop deals in electronics
			</div>
		</div>
	</header>

	<div class="hero-section">
		<div class="hero-messege">
			<p>You are on jaldhaka_bazar.com. You can also first shop on Amazon India for millions of products with first local delivery, <a href="">click here to go jaldhaka_bazar.com</a></p>
		</div>
	</div>

	<div class="shop-section">
		<div class="card">
				<img class ="card-img" src="admin-area/admin-images/<?php echo $image; ?>" alt="">
				<div class="card-body">
					<div class="card-title">
						<p><?php echo $details; ?></p>
				    </div>
				    <div class="card-price">
						<p>price: <?php echo $price; ?>/-</p>
				    </div>
				    <div class="card-action">
				    	<div class="card-details">
							<p><a class=".card-details-link" href="product_details.php">Details..</a></p>
					    </div>
					    <div class="card-add">
					    	<button><a class=".card-details-link" href="product_details.php">ADD TO CART</a></button>
					    </div>
					</div>
				</div>
			</div>
	</div>

	<div class="footer">
		<div class="foot-panel1">
			Back to Top
		</div>

		<div class="foot-panel2">
			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
			</ul>
		</div>

		<div class="foot-panel3">
			<div class="logo-image"></div>
		</div>
	</div>

</body>
</html>
