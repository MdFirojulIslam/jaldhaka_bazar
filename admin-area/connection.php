<?php
	
	$connection = mysqli_connect('localhost', 'root', '', 'jaldhaka_bazar');

	if (!$connection) 
	{
		die("Database connection failed". mysqli_connect_error());
	}

?>