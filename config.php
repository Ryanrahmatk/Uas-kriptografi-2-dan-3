<!-- Reprogramed By By Ryan Rahmat Kurniawan -->
<?php
	$conn = new mysqli("localhost","root","","cart_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>