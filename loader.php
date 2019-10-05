<?php
$con = mysqli_connect("remotemysql.com","ytzEjdpCNf","L9LcYDD81I","ytzEjdpCNf");

if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
  
 $userid = $_POST['userid'];
// $result = mysqli_query($con,"SELECT * From User_Course");
$result = mysqli_query($con,"SELECT Course.id as id,Course.name as Course,users.name as teacher FROM ((Course INNER JOIN User_Course ON Course.id = User_Course.course_id) INNER JOIN users ON users.id = User_Course.user_id) WHERE users.id = $userid");

while($row = mysqli_fetch_array($result)){   
   echo json_encode($row).",";
}

 mysqli_close($con);
?>