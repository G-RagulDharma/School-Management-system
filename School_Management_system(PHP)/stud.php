<html>
<body >
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
</style>
<form method="post">
<h1 style="color:#ff6ec7;"><center>STUDENT DETAILS</center></h1>
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="stud1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a>
<p>
NAME &emsp;&ensp;:<input type="text" name="sna"><br><br>
ROLL NO :<input type="number" name="srn"><br><br>
CLASS &emsp; :<input type="text" name="sclass"><br><br>
DOB   &emsp;&emsp;	:<input type="text" name="sdob"><br><br>
GENDER 	:<input type="radio" name="sgender" value="M">M
		 <input type="radio" name="sgender" value="F">F<br><br>
BLOOD GROUP :<select name="sblood"><br><br>
			<option value="A+">A+</option>
			<option value="B+">B+</option>
			<option value="O+">O+</option>
			</select><br><br>
ADDRESS :<input type="text" name="sadd"><br><br>
EXAM FEES &emsp;&emsp;:<input type="number" name="sfees"><br><br>
TUTION FEES &emsp;&emsp;:<input type="number" name="stution"><br><br>
DATE &emsp;&emsp;:<input type="date" name="date"><br><br>
ATTENDANCE:<input type="radio" name="attendance" value="P">Present
			<input type="radio" name="attendance" value="A">Absent<br><br>
<input type="submit" value="ADD" name="submit"></p>

</form>

<?php
require("connection_stud.php");
if(isset($_POST["submit"]))
{
	@$sna=$_POST["sna"];
	@$srn=$_POST["srn"];
	@$sclass=$_POST["sclass"];
	@$sdob=$_POST["sdob"];
	@$sgender=$_POST["sgender"];
	@$sadd=$_POST["sadd"];
	@$sblood=$_POST["sblood"];
	@$sfees=$_POST["sfees"];
	@$stution=$_POST["stution"];
	@$date=$_POST["date"];
	@$attendance=$_POST["attendance"];
	

	$sql="insert into t2 values('".$sna."','".$srn."','".$sclass."','".$sdob."','".$sgender."','".$sadd."','".$sblood."','".$sfees."','".$stution."','".$date."','".$attendance."')";
	$query=mysqli_query($conn,$sql);
	if($query)
	{
		echo "<br>INSERT SUCCESSFUL<br>";
	}
	else
	{
		echo "Error in insert:".$conn->error;
	}

}

?>



</html>