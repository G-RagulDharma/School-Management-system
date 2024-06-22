<html>
<body bgcolor=cyan>
<form method="post">
<h1><center>STUDENT DETAILS</center></h1>
Admission No:<input type="number" name="sno">
Date of Admission:<input type="number" name="sdate">
Name:<input type="text" name="sna">
Date of Birth:<input type="number" name="sdob">
<input type="submit" value="click">
</form>

<?php
	if(isset($_POST))
	{
		$sno=$_POST["sno"];
		$sdate=$_POST["sdate"];
		$sna=$_POST["sna"];
		$sdob=$_POST["sdob"];
		
		$servername="localhost";
		$username="root";
		$password="";
		
		$conn=new mysqli($servername,$username,$password);
		if($conn->connect_error)
		{
			die("Connection Failed".$conn->connect_error);
		}
		
		$sql="create database if not exists mydb100";
		if($conn->query($sql)==True)
		{
			echo "Database Created";
		}
		else
		{
			echo "Database not Created".$conn->error;
		}
		
		mysqli_select_db($conn,mydb100);
		if($conn->query($sql)==True)
		{
			echo "Database Selected";
		}
		else
		{
			echo "Database not Selected".$conn->error;
		}
		
		$sql="create table if not exists t1(sno int(10),sdate int(10),sna varchar(15),sdob int(10) )";
		if($conn->query($sql)==True)
		{
			echo "Table Created";
		}
		else
		{
			echo "Table not Created".$conn->error;
		}
		
		$sql="insert into t1 values('".$sno."','".$sdate."','".$sna."','".$sdob."')";
		if($conn->query($sql)==True)
		{
			echo "Insert Successfully";
		}
		else
		{
			echo "Error in insert:".$conn->error;
		}
	}
	$conn->close();
?>
</body></html>