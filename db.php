<?php 
$link=mysqli_connect("localhost","root","","mydb1"); 
$servername="localhost"
$usernam="username"
$password="password"
$dbname="mydb1"
$conn=new 
mysqli($servername,$usernam,$password,$dbname);
$sql="INSERT INTO
table1(Name,Rollno,User Name,Password,ReEnter Password) VALUES ('Amit',028,amity,2723,2723)";
if ($conn->connect_error)
{
	die("Connection failed:" . $conn->connect_error);
}
if ($conn->query($sql)===TRUE)
{
	echo "New record created successfully";
}
else 
 {
 	echo "Error: ".$sql .
 	"<br>" . $conn->error;
 }
$conn->close();
?>