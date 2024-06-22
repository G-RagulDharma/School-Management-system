<html>
<body>

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
</style>
<form method="post">
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="staff1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a>
TYPE:<select name="sttype"><br>
			<option value="Higher">Higher Secondary</option>
			<option value="High">High School</option>
			<option value="Middle">Middle School</option>
			<option value="Primary">Primary School</option>
			</select><br>
<input type="submit" value="SEARCH" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
	@$sttype=$_POST["sttype"];
	$servername="localhost";
	$username="root";
	$password="";
	$database="myDB112";
	
	$conn=mysqli_connect($servername,$username,$password,$database);
	$sql="select * from t1 where sttype='$sttype' ";
	$count=0;
	if($result=$conn->query($sql))
	{
		while($row=$result->fetch_assoc())
		{
			$f6=$row["stna"];
			$f1=$row["stma"];
			$f2=$row["stdob"];
			$f3=$row["stgender"];
			$f4=$row["stadd"];
			$f5=$row["stblood"];
			$f7=$row["sttype"];
			echo "<br>NAME   :",$f6;
			echo "<br>MAJOR  :",$f1;
			echo "<br>DOB    :",$f2;
			echo "<br>GENDER :",$f3;
			echo "<br>ADDRESS:",$f4;
			echo "<br>BLOOD  :",$f5;
			echo "<br>TYPE   :",$f7;
			echo "<br>";
			echo "-------------------";
			$count++;
		}
		if($count == 0) {
            echo "<br><center>No Record Found</center>";
        }
	}
	
}
?>

</body>
</html>