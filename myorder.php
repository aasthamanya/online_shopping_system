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
	background-color: tomato;
	color: white;
	display: inline block;
	margin-left:320px;
	font-size: 15px;
	opacity: 1;
	cursor: pointer;
	width: 200px;
	height: 50px;
}
.fakeimg button a{
	text-decoration: none;
	color:white;
	font-family: Charm;
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
  height:650px;
}

.card2 {
  width:345px;
  background-color: #ffcce0;
  padding: 20px;
  margin-top: 20px;
  height:650px;
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
include "config.php";
session_start();
$uid = $_SESSION['uid'];
$rq = mysqli_query($con,"select order_id,product_id from orders where userid = $uid");
echo "<div class='row'>
  <div class='leftcolumn'>
    <div class='card'>
      <div class='fakeimg' style='height:200px;'><h1 style='margin-left:280px;'>YOUR ORDERS  <i class='fa fa-shopping-bag' style='font-size:36px;'></i></h1><hr width='500px' style='margin-left:150px;'><br><br>
	  <table>
  <tr>
  <th>ORDER ID</th>
  <th>Product ID</th>
  <th>Product Description</th>
  <th>Price</th>
  </tr>";
  $count = mysqli_num_rows($rq);
  if($count > 0)
  {
while($arr1 = mysqli_fetch_array($rq))
{
	$id = $arr1['product_id'];
	$qu= mysqli_query($con,"select product_desc,product_price from products where product_id= $id");
	$arr2 = mysqli_fetch_array($qu);
echo "<tr>
  <th>$arr1[order_id]</th>
    <th>$arr1[product_id]</th>
  <th>$arr2[product_desc]</th>
  <th>$arr2[product_price]</th>
  </tr>";
}
  }
echo "</table></div></div></div>";
?>
<div class="rightcolumn">
    <div class="card2">
      <h2 style="text-align:center;">Choose from your favorite dresses</h2>
      <div class="fakeimg1" style="height:100px;"><img src="i5.jpg" width="290px" height="420px"></div>
 </div>
    </div>
	</div>
	<div class="footer">
  <h2>&copy; Fashion Diva Private Limited 2020</h2>
  <p style="text-align:center; font-size: 20px;">Project made by Aastha, Shruti, Aakansha & Harshita</p>
</div>
</body>