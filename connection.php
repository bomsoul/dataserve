<?php
$con = mysqli_connect("remotemysql.com","ytzEjdpCNf","L9LcYDD81I","ytzEjdpCNf");

if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
  
 $username = $_POST['username'];
 $password = $_POST['password'];
 $result = mysqli_query($con,"SELECT * FROM users where 
 username='$username' and password='$password'");
 $row = mysqli_fetch_array($result);

 if($row){
    echo json_encode($row);
 }
  
 mysqli_close($con);
?>