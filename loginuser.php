
<?php
include "config.php";

session_start();
extract($_REQUEST);
if(isset($submit))
{
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$_SESSION['eid']= $email;
$user=mysqli_query($con,"select userid,first_name from user_info where email='$email'");
$arr1=mysqli_fetch_array($user);
$_SESSION['uid']= $arr1['userid'];
  $sel=mysqli_query($con,"select email,passwrd from user_info where email='$email'");
  $arr=mysqli_fetch_array($sel);
if(($arr['email']==$email) and( $arr['passwrd']==$password))
  {
  header('location: myprofile.php');
  }
else
{
$er="id and password do not match";
echo "alert('$er')";
}
}
?>