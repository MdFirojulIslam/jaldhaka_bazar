<?php

$connection = mysqli_connect('localhost', 'root', '', 'jaldhaka_bazar');

	if(!$connection)
	{
		die("database not connected!") . mysqli_connect_error($connection);
	}
?>

