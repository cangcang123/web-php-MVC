<?php
if(isset($_SESSION["shopping_cart"])){
	$cart = $_SESSION["shopping_cart"];
	print_r($cart);
}
?>