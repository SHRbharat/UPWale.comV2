<?php

$conn = mysqli_connect('localhost','root','','UPWale_com');

if( !$conn ){
	die("Error".mysqli_connect_error());
}else{
	$username = $_SESSION['username'];
	$id = $_SESSION['product'];
	$quantity = (int)$_POST['qnt_box'];
	
	$sql = "INSERT INTO carts VALUES('$username',$id,$quantity);";
	mysqli_query($conn,$sql);
	
	echo "product : ".$id."add successfully to the cart!!";
}