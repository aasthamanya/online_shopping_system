<?php

include "config.php";
session_start();
$uid= $_SESSION['uid'];
$em= $_SESSION['eid'];
extract ($_REQUEST);
if(isset($submit))
{
	$fname = $_REQUEST['first_name'];
	$add = $_REQUEST['address'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$zip = $_REQUEST['zip'];
	$cvv = $_REQUEST['cvv'];
	$cardname = $_REQUEST['cardname'];
	$cardnumber = $_REQUEST['cardnumber'];
	$exp = $_REQUEST['expdate'];
	$q = "select product_id from cart where userid= $uid";
	$run = mysqli_query($con,$q);
		while($arr = mysqli_fetch_array($run))
		{
			$id = $arr['product_id'];
			$q2 = "insert into orders(userid,f_name,email,address,city,state1,zip,product_id,cardname,cardnumber,expdate,cvv) values ($uid,'$fname','$em','$add','$city','$state',$zip,$id,'$cardname',$cardnumber,'$exp',$cvv)";
			$myq = mysqli_query($con,$q2);
			if($myq)
			{
				echo "<script>alert('order placed successfully')</script>";
			}
			else
				echo "<script>alert('order could not be placed')</script>";
			$q3 = mysqli_query($con,"delete from cart where userid = $uid");
		}
	
}
?>
