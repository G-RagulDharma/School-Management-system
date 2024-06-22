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
	background-image:url('dy.jpg');
	background-repeat:no-repeat;
	
	background-size:cover;
}
</style>
<form method="post">
DATE &emsp;&emsp;:<input type="date" name="date"><br><br>
<input type="submit" value="click">
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="admin1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a>


</form>
<?php
require("connection_stud.php");
if(isset($_POST))
{
	@$date=$_POST["date"];
	
	$query="SELECT * FROM t2 WHERE date = '".$date."' ";
	echo "<span style='color:#ff6ec7;font-size:30px;font-family:elephant'>ATTENDANCE RECORD<br>";
	
	$count = 0; 
	echo "<br><span style='color:#ffffff;font-size:20px;font-family:elephant'>&emsp;NAME &emsp;&emsp;ATTENDANCE";
	if($result=$conn->query($query))
	{
		while($row=$result->fetch_assoc())
		{
			$f1=$row["sna"];
			$f2=$row["attendance"];
			
			echo "<br>";
			
			echo "<br><br><span style='color:#0180ff;font-size:20px;'>&emsp;&ensp;",$f1,"&emsp;&emsp;&emsp;&emsp;",$f2;
			echo "<br>";
			$count++;
		}
		if($count == 0) {
            echo "<br><center><span style='color:#0180ff;font-size:20px;font-family:elephant'>No Record Found</center>";
        }
	}
	
}
?>


</body>
</html>