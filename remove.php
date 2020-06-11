<?php

include ("config.php");
session_start();
extract($_REQUEST);
$uid= $_SESSION['uid'];
if(isset($submit))
{
	$pid1 = $_REQUEST['id'];
	$q3= mysqli_query($con,"delete from cart where product_id=$pid1 and userid=$uid");
	if($q3)
	{
		echo "<script>alert('item removed from cart')</script>";
		header('location: cart.php');
	}
	else
		echo "<script>alert('item could not be removed')</script>";
}
?>