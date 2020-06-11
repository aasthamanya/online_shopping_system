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
}
.fakeimg1 {
  width: 100%;
  padding: 10px;
  margin-right: 80px;
}
.card {
width:1090px;
  background-color: #ffc299;
  padding: 10px;
  margin-top: 20px;
  height:450px;
}

.card2 {
  width:345px;
  background-color: #ffcce0;
  padding: 10px;
  margin-top: 20px;
  height:450px;
}
.container {
  position: relative;
  width: 300px;
  height: 300px;
  display: inline;
}

.image {
  opacity: 1;
  display: inline;
  width: 250px;
  height: 250px;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 20%;
  left: 20%;
  transform: translate(-20%, -20%);
  -ms-transform: translate(-20%, -20%)
}

.container:hover .image {
  opacity: 0.5;
}

.container:hover .middle {
  opacity: 1;
}

.text a{
	background-color:tomato;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
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
<div class='row'>
  <div class='leftcolumn'>
    <div class='card'>
      <div class='fakeimg' style='height:200px;'><h2 style="text-align:center;">What do you wish to buy today?</h2><br>
	  <div class="container">
	  <img src="i1.jpg" class="image">
	    <div class="middle">
    <div class="text"><a href="bellies.php">Bellies</a></div>
  </div>
</div>
<div class="container">
	  <img src="h1.jpg" class="image">
	    <div class="middle">
    <div class="text"><a href="heels.php">Heels</a></div>
  </div>
</div>
<div class="container">
	  <img src="h2.jpg" class="image">
	    <div class="middle">
    <div class="text"><a href="flats.php">Flats</a></div>
  </div>
</div>
<div class="container">
	  <img src="h3.jpg" class="image">
	    <div class="middle">
    <div class="text"><a href="sports.php">Sport Shoes</a></div>
  </div>
</div>
	  </div>
	  </div>
	  </div>
	  <div class="rightcolumn">
    <div class="card2">
      <h2 style="text-align:center;">Trending Today</h2>
      <div class="fakeimg1" style="height:100px;"><img src="h4.png" width="290px" height="290px"></div>
 </div>
    </div>
	</div>
	<div class="footer">
  <h2>&copy; Fashion Diva Private Limited 2020</h2>
  <p style="text-align:center; font-size: 20px;">Project made by Aastha, Shruti, Aakansha & Harshita</p>
</div>
</body>