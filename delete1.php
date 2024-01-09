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
if($_POST['new1']==" " || $_POST['new1']==="Enter  password")
{
	echo '<script>alert("Fill required field")</script>';
}
else
{
$pass=$_POST['new1'];
$sql="DELETE FROM studentinfo  WHERE password='$pass'";
	if($conn->query($sql)===TRUE)
{
	echo "<h1 style='color:white'> Data deleted successfully";
}
}	
?>