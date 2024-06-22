<html>
<body id="id1">
<h1 style="color:#0AFFFF;"><center>STAFF DETAILS</center></h1>
<form method="post">
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="staff1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a>
<p>
NAME    :<input type="text" name="stna"><br><br>
MAJOR :<input type="text" name="stma"><br><br>
DOB		:<input type="text" name="stdob"><br><br>
GENDER	:<input type="radio" name="stgender" value="M">M
		 <input type="radio" name="stgender" value="F">F<br><br>
BLOOD GROUP:<select name="stblood"><br><br>
			<option value="A+">A+</option>
			<option value="B+">B+</option>
			<option value="O+">O+</option>
			</select><br><br>
TYPE:<select name="sttype"><br><br>
			<option value="Higher">Higher Secondary</option>
			<option value="High">High School</option>
			<option value="Middle">Middle School</option>
			<option value="Primary">Primary School</option>
			</select><br><br>
ADDRESS:<input type="text" name="stadd"><br><br>
<input type="submit" value="ADD" name="submit"></p>
</form>

<?php
if(isset($_POST["submit"]))
{
	@$stna=$_POST["stna"];
	@$stma=$_POST["stma"];
	@$stdob=$_POST["stdob"];
	@$stgender=$_POST["stgender"];
	@$stadd=$_POST["stadd"];
	@$stblood=$_POST["stblood"];
	@$sttype=$_POST["sttype"];
	
	$servername="localhost";
	$username="root";
	$password="";
		
	$conn=new mysqli($servername,$username,$password);
	if($conn->connect_error)
	{
		die("Connection Failed".$conn->connect_error);
	}
	
	$sql="CREATE DATABASE if not exists myDB112";
	$query=mysqli_query($conn,$sql);
	if($query)
	{
		echo "<br>Database Created<br>";
	}
	else
	{
		echo "Database Created:".$conn->error;
	}
	
	
	mysqli_select_db($conn,"myDB112");
	

	$sql="create table if not exists t1(stna varchar(10),stma varchar(10),stdob varchar(10),stgender varchar(5),stblood varchar(5),sttype varchar(20),stadd varchar(20))";
	if($conn->query($sql)==TRUE)
	{
		echo "Table Created<br>";
	}
	else
	{
		echo "Table not found:".$conn->error;
	}
	
	$sql="insert into t1 values('$stna','$stma','$stdob','$stgender','$stblood','$sttype','$stadd')";
	if($conn->query($sql)==TRUE)
	{
		echo "INSERTED SUCCESSFUL<br>";
	}
	else
	{
		echo "Error in insert:".$conn->error;
	}
	$conn->close();
}

?>

<style type="text/css">
#btn
{
  position: absolute;
  right: 0;
  z-index: 2;
 
}
#btn1
{
  position:absolute;
  right: 100;
  z-index: 200;
}
body{
	background-image:url('dy.jpg');
	background-repeat:no-repeat;
	
	background-size:cover;
}
</html>