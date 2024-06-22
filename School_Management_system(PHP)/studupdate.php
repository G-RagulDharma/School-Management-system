<html>
<body>
<form method="post">
<h1 style="color:#ff6ec7;">&emsp;UPDATE</h1><br>
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="stud1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a>
<p>
OLD DATA:
ROLL NO :<input type="text" name="srn"><br><br><br>
NEW DATE FOR UPDATION:<br><br>
EXAM FEES:
<select name="sfees">
<option value="0">0</option>
  <option value="500">500</option>
  <option value="1000">1000</option>
  <option value="1500">1500</option>
  <option value="2000">2000</option>
 
</select><br><br>

TUITION FEES:
<select name="stution">
	<option value="0">0</option>
  <option value="500">500</option>
  <option value="1000">1000</option>
  <option value="1500">1500</option>
	<option value="2000">2000</option>
	
</select><br><br>
<input type="submit" value="UPDATE"></p>

</form>
<?php

	
	@$srn=$_POST["srn"];

	@$sfees=$_POST["sfees"];
	@$stution=$_POST["stution"];
	
	
	$servername="localhost";
	$username="root";
	$password="";
	$database="myDB12";
	
	$conn=new mysqli($servername,$username,$password,$database);
	$sql="UPDATE t2 SET sfees = '".$sfees."',stution = '".$stution."' WHERE srn = '".$srn."' ";
	if ($conn->query($sql) == TRUE) 
	{
		echo "<span style='color:#e90ebe;font-size:30px;font-family:arial'> Record UPDATE successfully";
	} 
	else
	{
		echo "<span style='color:#e90ebe;font-size:30px;font-family:arial'> Error: " . $conn->error;
	}

	$conn->close();

	
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
</body>
</html>