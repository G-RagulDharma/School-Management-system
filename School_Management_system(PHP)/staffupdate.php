<html>
<body>
<form method="post">
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="staff1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a>
<p>
OLD DATA:
NAME    :<input type="text" name="stna"><br><br>
NEW DATE FOR UPDATION:<br><br>
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
<input type="submit" value="UPDATE" name="submit"></p>

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
	$database="myDB112";
	
	$conn=new mysqli($servername,$username,$password,$database);
	$sql="UPDATE t1 SET stma = '".$stma."',stdob = '".$stdob."',stgender = '".$stgender."',stadd = '".$stadd."' ,stblood = '".$stblood."',sttype = '".$sttype."' WHERE stna = '".$stna."' ";
	if ($conn->query($sql) == TRUE) 
	{
		echo "<span style='color:#e90ebe;font-size:30px;font-family:arial'> Record UPDATE successfully";
	} 
	else
	{
		echo "<span style='color:#e90ebe;font-size:30px;font-family:arial'> Error: " . $conn->error;
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
	background-image:url('dy2.jpg');
	background-repeat:no-repeat;
	background-size:cover;
}
</body>
</html>