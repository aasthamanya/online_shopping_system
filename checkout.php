<head>
<link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Charm;
  padding: 10px;
  background-color: grey;
}
.header {
  padding: 30px;
  text-align: center;
  background-image : url("bg3.png");
  width:100%;
  height:auto; 
    background-size: cover;
    background-position: center;
  background-repeat: no-repeat;
}

.header h1 {
  font-size: 50px;
}
.header p{
  font-size: 30px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.leftcolumn {   
  float: left;
  width: 75%;
}
.rightcolumn {
  float: left;
  width: 25%;
  background-color: grey;
  padding-left: 20px;
}
.fakeimg {
  width: 100%;
  padding: 20px;
  margin-left:50px;
}
.fakeimg button{
	background-color: #f2f2f2;
	color: black;
	display: inline block;
	margin-left:320px;
	font-size: 15px;
	opacity: 1;
	cursor: pointer;
	width: 200px;
	height: 50px;
}
.fakeimg label{
	margin-left:350px;
}
.fakeimg1 {
  width: 100%;
  padding: 10px;
  margin-right: 80px;
}
.card {
width:1090px;
  background-color: #ffc299;
  padding: 20px;
  margin-top: 20px;
  height:1230px;
}

.card2 {
  width:345px;
  background-color: #ffcce0;
  padding: 20px;
  margin-top: 20px;
  height:650px;
}
.card3 {
  width:345px;
  background-color: #ffcce0;
  padding: 20px;
  margin-top: 20px;
  height:565px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
  opacity:0.5;
}

input[type=text], input[type=number],input[type=email] {
  width: 60%;
  padding: 12px 20px;
  margin-left:140px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color : red;
}
input[type=submit]{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin-left:140px;
  border: none;
  cursor: pointer;
  width: 60%;
}

input[type=submit]:hover {
  opacity: 0.8;
}
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
table {
  border-collapse: collapse;
  width: 800px;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
<div class="header">
  <h1>Fashion Diva</h1>
  <p><b>Hello and Welcome!</b></p>
</div>

<div class="topnav">
  <a href="index1.html">Home</a>
  <a href="myprofile.php">My Profile</a>
  <a href="cart.php">My cart</a>
  <a href="footwear.php">Footwear</a>
  <a href="#">Clothing</a>
  <a href="#">Accessories</a>
  <a href="#">Cosmetics</a>
</div>
<?php

include ("config.php");
session_start();
extract($_REQUEST);
$email= $_SESSION['eid'];
$uid= $_SESSION['uid'];
if(isset($submit))
{
	$pid = $_REQUEST['id'];
	$quant = $_REQUEST['quantity'];
	$desc = $_REQUEST['name'];
	$price = $_REQUEST['price'];
	$check= mysqli_query($con,"select product_id from cart where userid=$uid and product_id=$pid");
	$count=mysqli_num_rows($check);
	if($count>0)
	{
		echo "<script>alert('item already in cart')</script>";
	}
	else
	{
	$q2 = "insert into cart(product_id,userid,qty,product_desc,price) values ($pid,$uid,$quant,'$desc',$price)";
	if(mysqli_query($con,$q2))
		echo "<script>alert('item added successfully')</script>";
	else
		echo "<script>alert('item could not be added')</script>";
	}
}
?>

<?php
$quer= "select product_id,product_desc,qty,price from cart where userid=$uid";
$rq= mysqli_query($con,$quer);
$total=0;
echo "<div class='row'>
  <div class='leftcolumn'>
    <div class='card'>
      <div class='fakeimg' style='height:200px;'><h1 style='margin-left:280px;'>Product Details <i class='fas fa-shopping-cart'></i></h1><hr width='500px' style='margin-left:150px;'><br><br>
	  <table>
  <tr>
  <th>Product ID</th>
  <th>Product Description</th>
  <th>Price</th>
  <th>Quantity</th>
  </tr>";
  if(mysqli_num_rows($rq) >0)
  {
while($arr= mysqli_fetch_array($rq))
{
	$total= $total+ ($arr['price']*$arr['qty']);
echo "<tr>
  <th>$arr[product_id]</th>
  <th>$arr[product_desc]</th>
  <th>$arr[price]</th>
  <th>$arr[qty]</th>
  </tr>";
}
  }
echo "</table><br><h2 style='margin-left:280px;'> Total cart value is Rs.$total</h2><br>
<form action='order.php' method='post'>
<label for='first_name'><b>First Name</b></label>
<br>
<input type='text' name='first_name' id='first_name' placeholder='First Name' required>
<br>
<label for='address'><b>Address</b></label>
<br>
<input type='text' name='address' id='address' placeholder='Address' required>
<br>
<label for='city'><b>City</b></label>
<br>
<input type='text' name='city' id='city' placeholder='City' required>
<br>
<label for='state'><b>State</b></label>
<br>
<input type='text' name='state' id='state' placeholder='State' required>
<br>
<label for='zip'><b>Zip code</b></label>
<br>
<input type='number' name='zip' id='zip' placeholder='Zip code' required>
<br>
<label for='cardname'><b>Card Name</b></label>
<br>
<input type='text' name='cardname' id='cardname' placeholder='Card Name' required>
<br>
<label for='cardnumber'><b>Card Number</b></label>
<br>
<input type='number' name='cardnumber' id='cardnumber' placeholder='Card Number' required>
<br>
<label for='cvv'><b>CVV</b></label>
<br>
<input type='number' name='cvv' id='cvv' placeholder='CVV' required>
<br>
<label for='exp'><b>Expiry Date</b></label>
<br>
<input type='text' name='expdate' id='exp' required>
<br>
<br>
<input type='submit' name='submit' value='Place Your Order'></form></div></div></div>";
?>
<div class="rightcolumn">
    <div class="card2">
      <h2 style="text-align:center;">Choose from your favorite dresses</h2>
      <div class="fakeimg1" style="height:100px;"><img src="i5.jpg" width="290px" height="420px"></div>
 </div>
 <div class="card3">
      <h2 style="text-align:center;">Perfect Denims for you</h2>
      <div class="fakeimg1" style="height:100px;"><img src="i3.jpg" width="290px" height="400px"></div>
 </div>
    </div>
	</div>
	<div class="footer">
  <h2>&copy; Fashion Diva Private Limited 2020</h2>
  <p style="text-align:center; font-size: 20px;">Project made by Aastha, Shruti, Aakansha & Harshita</p>
</div>
</body>