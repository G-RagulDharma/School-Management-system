<?php
	$servername="localhost";
	$username="root";
	$password="";
		
	$conn=new mysqli($servername,$username,$password);
	if($conn->connect_error)
	{
		die("Connection Failed".$conn->connect_error);
	}
	
	$sql="CREATE DATABASE if not exists myDB12";
	/*$query=mysqli_query($conn,$sql);
	if($query)
	{
		echo "<br>Database Created<br>";
	}
	else
	{
		echo "Database Created:".$conn->error;
	}*/

	
	
	mysqli_select_db($conn,'myDB12');
	

	$sql="create table if not exists t2(sna varchar(10),srn int(10),sclass varchar(10),sdob varchar(10),sgender varchar(5),sadd varchar(20),sblood varchar(5),sfees int(10),stution int(10), date varchar(10), attendance varchar(5))";
	/*$query=mysqli_query($conn,$sql);
	if($query)
	{
		echo "<br>Table Created<br>";
	}
	else
	{
		echo "Table not created:".$conn->error;
	}*/
	
?>