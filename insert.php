<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$con=
mysql_connect("mysql.new.mydb1.new","new","password");
if (!$con)
{
die('could not connect: ' . mysql_error());
}
mysql_select_db("mydb1",$con);
$sql="INSERT INTO nametable (fname,lname)values('$_POST[fname]','$_POST[lname]')";
if (!mysql_query($sql,$con)) {
	die('Error:'.mysql_error());
}
echo "1 record added";
mysql_close($con)
?>
</body>
</html>