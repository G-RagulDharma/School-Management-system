<html>
<body>
<h1 style="color:#ff6ec7;">&emsp;EXAM FEES</h1>
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="admin1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a>


<?php

	
    $servername="localhost";
    $username="root";
    $password="";
    $database="myDB12";
    
    $conn=new mysqli($servername,$username,$password,$database);
	

		$sql = "UPDATE t2 SET sfees = 0";
		$result=$conn->query($sql);


		if ($result)
		{
			echo "<span style='color:#000000;font-size:20px;font-family:arial'>All Examfees updated to 0";
		}
		else 
		{
			echo "Error updating sfees: " . mysqli_error($database);
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