<style>
div.gallery {
  margin-left: 120px;
  margin-right:40px;
  margin-top:40px;
  float: left;
  width: 300px;
}

div.gallery img {
  width: 300px;
  height: 250px;
}

div.desc {
  padding: 10px;
  text-align: center;
  background-color:white;
}

input[type=submit]{
	  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}
	
.b{
		background-image: url("https://wallpapermemory.com/uploads/632/nike-wallpaper-full-hd-357006.jpg");
  width:100%;
  height: auto; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="b">
<?php

include ("config.php");
session_start();
$q1="select * from products where cat_id=2 and sub_cat_id=9";
$run_q= mysqli_query($con,$q1);
    while($arr=mysqli_fetch_array($run_q))
   {
	   $i=$arr['product_id'];
   echo "

  <div class='gallery'>
      <img src='footwear/sport_shoes/$i.jpg'>
		<form action='cart.php' method='post'>
	  <div class='desc'><input type='hidden' name='id' value='$arr[product_id]'>$arr[product_id] </div>
    <div class='desc'><input type='hidden' name='name' value='$arr[product_desc]'>$arr[product_desc] </div>
	<div class='desc'><input type='hidden' name='price' value='$arr[product_price]'>Rs.$arr[product_price]</div>
  <div class='desc'><input type='text' name='quantity' value='1' placeholder='quantity'></div>
  <div class='desc'><input type='submit' value='add to cart' name='submit'></div>
</form></div>";
   }	  

?>
</body>