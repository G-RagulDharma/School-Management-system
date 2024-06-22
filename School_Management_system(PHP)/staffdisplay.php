<html>
<body>
<form method="post">
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="staff1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a>
<input type="submit" value="DISPLAY" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
	
	$servername="localhost";
	$username="root";
	$password="";
	$database="myDB112";
	
	$mysqli=new mysqli($servername,$username,$password,$database);
	$query="select * from t1 ";
	echo "<center><span style='color:#e90ebe;font-size:30px;font-family:arial'>--STAFF TABLE--</center>";
	if($result=$mysqli->query($query))
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
			echo "<br><span style='color:#0180ff;font-size:20px;'> NAME   :",$f6;
			echo "<br><span style='color:#0180ff;font-size:20px;'>MAJOR  :",$f1;
			echo "<br><span style='color:#0180ff;font-size:20px;'>DOB    :",$f2;
			echo "<br><span style='color:#0180ff;font-size:20px;'>GENDER :",$f3;
			echo "<br><span style='color:#0180ff;font-size:20px;'>ADDRESS:",$f4;
			echo "<br><span style='color:#0180ff;font-size:20px;'>BLOOD  :",$f5;
			echo "<br><span style='color:#0180ff;font-size:20px;'>TYPE   :",$f7;
			echo "<br><span style='color:#0180ff;font-size:20px;'>";
			echo "------------------------------------";
		}
	}
	else
		echo "No Record Found";
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