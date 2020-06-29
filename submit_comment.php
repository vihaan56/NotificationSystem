<?php
require_once('connect.php');
$subject = $_POST['subject'];
$comment = $_POST['comment'];
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );
$status = 0;
$sql = "INSERT INTO `comments`(`comment_subject`, `comment_text`, `comment_status`, `date`) VALUES ('$subject','$comment',$status,'$currentTime')";
$query = mysqli_query($connect,$sql);

