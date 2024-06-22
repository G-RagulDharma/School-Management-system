 <html>
<body>
<form method="post">
ROLL NO:<input type="text" name="rn">
ATTENDANCE:<select name="attend">
	<option value="P">Present</option>
	<option value="A">Absent</option>
</select>
<input type="submit" value="click">
</form>

<?php
if(isset($_POST))
{
	@$rn=$_POST["rn"];
	@$attend=$_POST["attend"];
	@$date=date("Y-m-d");
	
	$servername="localhost";
	$username="root";
	$password="";
	$database="myDB51";
	
	$conn=new mysqli($servername,$username,$password,$database);
	if($conn->connect_error)
	{
		die("Connection Failed".$conn->connect_error);
	}
	
	$sql="SELECT * FROM t1 ";
	$result=$conn->query($sql);
	while($row=$reslt->fetch_assoc())
	{
		$rn=$row["rn"];
		$attend=$row["attend"];
		$date=$row["date"];
		
		$sql="create table if not exists t1(rn varchar(10),attend varchar(10),date varchar(10))";
		if($conn->query($sql)==TRUE)
		{
			echo "TABLE CREATED SUCCESSFUL<br>";
		}
		else
		{
			echo "Error Creating Table:".$conn->error;
		}
		$sql="insert into t1 values('".$rn."','".$attend."','".$date."')";
		if($conn->query($sql)==TRUE)
		{
			echo "Attendance Recorded <br>";
		}
		else
		{
			echo "Error ".$sql."<br>".$conn->error;
		}
	}
	$conn->close();
}

?>
</html>
