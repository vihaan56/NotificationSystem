<?php 
//connect.php;
$connect = mysqli_connect("localhost", "YoureUserName", "YourPassword", "DatabaseName");
if(!$connect)
{
     echo "connection error";
}
?>
