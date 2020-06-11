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
.fakeimg ul{
margin-left: 20px;
	font-size: 35px;
	list-style-type: none;
}
.fakeimg li{
	text-align: left;
	font-size: 30px;
	margin-left: 10px;
}
.fakeimg button{
	margin-left: 80px;
	background-color: tomato;
	color: white;
	display: inline block;
	font-size: 22px;
	opacity: 0.6;
	cursor: pointer;
	width: 210px;
	height: 80px;
}
.fakeimg button:hover{
	opacity: 1;
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
session_start();
include "config.php";
$em= $_SESSION['eid'];
$runq = mysqli_query($con,"select first_name,last_name,email,gender,mobile,address,city,state1 from user_info where email='$em'");
while($arr2 = mysqli_fetch_array($runq))
{
	echo "<div class='row'>
  <div class='leftcolumn'>
    <div class='card'>
      <div class='fakeimg' style='height:200px;'><ul>Welcome to your profile, here are your details. . .
	  <br><hr width='750px' align='left'>
<li><i class='fas fa-user' style='font-size:36px'></i> Name : $arr2[first_name]  $arr2[last_name]</li>
	  <li><i class='fas fa-envelope' style='font-size:36px'></i> Email : $arr2[email]</li>
	  <li><i class='fas fa-phone' style='font-size:36px'></i> Phone Number : $arr2[mobile]</li>
	  <li><i class='fas fa-venus-mars' style='font-size:36px'></i> Gender : $arr2[gender]</li>
	  <li><i class='fas fa-home' style='font-size:36px'></i> Address : $arr2[address]</li>
	  <li><i class='fas fa-city' style='font-size:36px'></i> City: $arr2[city]</li>
	  </ul>
	  <button><a href='cart.php'>Go to your cart</a><i class='fas fa-shopping-cart'></i></button><button><a href='index.html'>Logout</a></button>
	  <button><a href='myorder.php'>View your orders</a></button>
	  </div>
	  </div>
	  </div>";
}
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
