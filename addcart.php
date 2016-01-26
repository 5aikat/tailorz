<?php

if(empty($_SESSION['cart'])){
	$_SESSION['çart'] = array();
	
}
$_SESSION['cart'][] = $_GET['id'];


?>

<H1>Product Successfully Added !! <a href="cart.php" >View Cart</a> <a href="logout.php">logout </a> </H1>