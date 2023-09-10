<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="contentverse";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
  echo "Connection to the Server Failed ".mysqli_connect_error();
}else{
  echo "<script>console.log('Connection to the Server Successful');</script>";
}

 ?>
