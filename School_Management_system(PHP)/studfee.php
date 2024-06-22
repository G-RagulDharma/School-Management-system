<html>
<body>
<form method="post">
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="home.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a>


</form>
<?php
	@$sname=$_POST["sname"];
	$servername="localhost";
	$username="root";
	$password="";
	$database="myDB12";
	
	$mysqli=new mysqli($servername,$username,$password,$database);
	$query="SELECT * FROM `t2` WHERE `sfees` = '0' and stution='0'";
	echo "<center><span style='color:#ffffff;font-size:30px;font-family:elephant'>FEES  PENDING  STUDENT  LIST</center>";
	echo "<br><br><br><center><span style='color:#66ffff;font-size:30px;font-family:arial'>--NAME--</center>";
	if($result=$mysqli->query($query))
	{
		while($row=$result->fetch_assoc())
		{
			$f6=$row["sna"];
			
			
			echo "<br>";
			echo "<center><span style='color: #4dff4d;font-size:20px;'> $f6 </center>";
			echo "<br><br>";
			/**echo "<br>ROLL NO:",$f1;
			echo "<br>CLASS  :",$f7;
			echo "<br>DOB    :",$f2;
			echo "<br>GENDER :",$f3;
			echo "<br>ADDRESS:",$f4;
			echo "<br>BLOOD  :",$f5;
			echo "<br>";
			echo "-------------------";*/
		}
	}
	else
		echo "No Record Found";
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