<?php
$con = mysqli_connect("remotemysql.com","ytzEjdpCNf","L9LcYDD81I","ytzEjdpCNf") or die("Connection Fail")
$name = $_POST["name"];

$sql_query= "insert into users (name)VALUES ('$name');";
if(mysqli_query($con,$sql_query)){
    echo "DATA INSERT";
}
else{
    echo "DATA INSERT ERROR";
}
?>