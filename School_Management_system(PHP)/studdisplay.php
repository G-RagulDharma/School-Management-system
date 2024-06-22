<html>
<body>
<form method="post">
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="stud1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a>

</form>
<?php
if(isset($_POST))
{
	
	$servername="localhost";
	$username="root";
	$password="";
	$database="myDB12";
	
	$mysqli=new mysqli($servername,$username,$password,$database);
	$query="select * from t2 ";
	echo "<span style='color:#e90ebe;font-size:40px;font-family:arial'>--STUDENT TABLE--";
	if($result=$mysqli->query($query))
	{
		while($row=$result->fetch_assoc())
		{
			$f6=$row["sna"];
			$f1=$row["srn"];
			$f7=$row["sclass"];
			$f2=$row["sdob"];
			$f3=$row["sgender"];
			$f4=$row["sadd"];
			$f5=$row["sblood"];
			$f8=$row["date"];
			$f9=$row["attendance"];
			$f10=$row["sfees"];
			$f11=$row["stution"];
			echo "<br>";
			
			echo "<br><span style='color:#ff0080;font-size:20px;'>NAME &emsp;&emsp;&ensp;   :",$f6;
			echo "<br><span style='color:#ff0080;font-size:20px;'>ROLL NO &emsp; :",$f1;
			echo "<br><span style='color:#ff0080;font-size:20px;'>CLASS  &emsp;&emsp; :",$f7;
			echo "<br><span style='color:#ff0080;font-size:20px;'>DOB   &emsp;&emsp;&emsp;  :",$f2;
			echo "<br><span style='color:#ff0080;font-size:20px;'>GENDER &emsp;&ensp;:",$f3;
			echo "<br><span style='color:#ff0080;font-size:20px;'>ADDRESS &ensp; :",$f4;
			echo "<br><span style='color:#ff0080;font-size:20px;'>BLOOD &emsp;&ensp;  :",$f5;
			echo "<br><span style='color:#ff0080;font-size:20px;'>DATE &emsp;&emsp;&ensp;  :",$f8;
			echo "<br><span style='color:#ff0080;font-size:20px;'>ATTENDANCE  :",$f9;
			echo "<br><span style='color:#ff0080;font-size:20px;'>EXAM FEES  :",$f10;
			echo "<br><span style='color:#ff0080;font-size:20px;'>TUTION FEES  :",$f11;
			echo "<br><span style='color:#ff0080;font-size:20px;'>";
			echo "-----------------------------------";
			
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
	background-image:url('dy.jpg');
	background-repeat:no-repeat;
	
	background-size:cover;
}
</body>
</html>