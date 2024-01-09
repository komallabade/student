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
if($_POST['val']==" " || $_POST['old1']==" " || $_POST['new1']==" ")
{
	echo '<script>alert("Fill all required field")</script>';
}

else
{
	$re=$_POST['val'];
	
	
	if(trim($re)==1)
	{ 
		$old=$_POST['old1'];
		$new=$_POST['new1'];
		$sql="UPDATE studentinfo SET name='$new' WHERE password='$old'";
	if($conn->query($sql)===TRUE)
{
	echo " <h1 style='color:white'> Data updated successfully";
}
}

	elseif(trim($re)==2)
	{
		$old=$_POST['old1'];
		$new=$_POST['new1'];
		
		
		$sql="UPDATE studentinfo SET mobile='$new' WHERE password='$old'";
	if($conn->query($sql)===TRUE)
{
	echo "<h1 style='color:white'> Data updated successfully";
}
	}
	elseif(trim($re)==3)
	{
		$old=$_POST['old1'];
		$new=$_POST['new1'];
		
		$sql="UPDATE studentinfo SET branch='$new' WHERE password='$old'";
	if($conn->query($sql)===TRUE)
{
	echo "<h1 style='color:white'>Data updated successfully";
}
	}
	
}
?>