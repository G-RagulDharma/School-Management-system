<html>
<body>
<center>
<h1 style="color:#66ffff;font-family:arial; font-size:50px; font-style:italic;">ADD NEW USER</h1>

<a href="login1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a><br><br><br><br><br>
<form method="post" ><br>
<label style="color: #ff66d9; font-family:arial; font-size:30px; font-style:italic;">USERNAME : </label>
<input type="text" name="na"><br><br><br><br>

<label style="color: #ff66d9; font-family:arial; font-size:30px; font-style:italic;">PASSWORD : </label>
<input type="password" name="pass"><br><br><br><br>
<input type="submit" value="" style="background:url('login5.png'); width:100px; height:50px; background-size:cover;">
</form>
<?php

if(isset($_POST))
{
	@$na=$_POST["na"];
	@$pass=$_POST["pass"];
	
	
	$servername="localhost";
	$username="root";
	$password="";
		
	$conn=new mysqli($servername,$username,$password);
	if($conn->connect_error)
	{
		die("Connection Failed".$conn->connect_error);
	}
	
	$sql="CREATE DATABASE if not exists myDB11";
	if($conn->query($sql)==TRUE)
	{
		echo "DATABASE CREATED<br>";
	}
	else
	{
		echo "Error Creating Database:".$conn->error;
	}
	
	mysqli_select_db($conn,'myDB11');
	if($conn->query($sql)==TRUE)
	{
		echo "DB SELECTED<br>";
	}
	else
	{
		echo "Error Creating Table:".$conn->error;
	}
	$sql="create table if not exists t1(na varchar(10),pass varchar(10))";
	if($conn->query($sql)==TRUE)
	{
		echo "TABLE CREATED SUCCESSFUL<br>";
	}
	else
	{
		echo "Error Creating Table:".$conn->error;
	}
	
	$sql="insert into t1 values('".$na."','".$pass."')";
	if($conn->query($sql)==TRUE)
	{
		echo "INSERTED SUCCESSFUL<br>";
	}
	else
	{
		echo "Error in insert:".$conn->error;
	}
}
$conn->close();
?>

<style type="text/css">
#btn1
{
  position: absolute;
  right: 0;
  z-index: 2;
}
body{
	background-image:url('bg1.jpg');
	background-repeat:no-repeat;
	background-size:cover;
}
</html>