<?php 
$user="root";
$server="localhost:4306";
$db="student";
$pass="";
$conn=new mysqli($server,$user,$pass,$db);
echo '<body  bgcolor="#008B8B" align="center" >';
if(!$conn)
{
	die($conn->connect_error);
}
$name=$_POST['name'];
$pass=$_POST['pass'];
$mob=$_POST['mob'];
$branch=$_POST['branch'];
$dob=$_POST['dob'];
echo $pass;
if($name===""|| $pass==="" || $mob==="" || $branch==="" ||$dob==="")
{
	echo '<script>alert("Fill all required field")</script>';
}
else
{
$sql="INSERT INTO studentinfo (name,password,mobile,branch,dob)VALUES('$name','$pass','$mob','$branch','$dob')";
if($conn->query($sql)===TRUE)
{
	echo "<h1 style='color:white'>  Data inserted successfully";
}
else
{
	echo $conn->error();
}
}




?>