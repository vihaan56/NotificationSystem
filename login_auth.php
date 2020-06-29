<?php
session_start();
//this method is not used in production level this is only for develop logic fast
//prepared query
//password must be in hash(encrypted) format
require_once "connect.php";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `username`= '$username'";
$query = mysqli_query($connect,$sql);
if(mysqli_num_rows($query) > 0)
{
    $row = mysqli_fetch_assoc($query);
    if($row['password'] == $password){
        $_SESSION['login_username'] = $row['name'] ;
        $_SESSION['login_id']   = $row['user_id'];
        header('location:./index.php');
    }
    else{

    }      
}
else{

}

