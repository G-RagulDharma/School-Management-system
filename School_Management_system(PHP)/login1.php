<html>
<body>
<center>
<h1 style="color:#ffffff;font-family:arial; font-size:50px; font-style:italic;">LOGIN</h1>
<a href="login.php" ><img src="new.png" alt="add" id="btn" width="80" height="50"></a>
<form method="post"><br><br><br><br><br><br>

<label style="color: #ffffff; font-family:arial; font-size:30px; font-style:italic;">USERNAME : </label>
<input type="text" name="na" style="background-color: #99ffff; width:200px; height:30px;"><br><br><br><br><br><br>

<label style="color: #ffffff; font-family:arial; font-size:30px; font-style:italic;">PASSWORD : </label>
<input type="password" name="pass" style="background-color:#99ffff; width:200px; height:30px;"><br><br><br><br><br><br>

<input type="submit" value="" style="background:url('login5.png'); width:100px; height:50px; background-size:cover;"><br><br><br>
</center>
</form>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$na=$_POST["na"];
		$pass=$_POST["pass"];
		$servername="localhost";
		$username="root";
		$password="";
		$database="myDB11";
		
		$mysqli=new mysqli($servername,$username,$password,$database);
		
		if(empty($na) && empty($pass))
		{
			echo "<center><span style='color:#ffffff;font-size:20px;'> Please Fill name and password </center>";
		}
		else
		{
		$sql="SELECT * FROM `t1` WHERE `na` = '".$na."' AND `pass` = '".$pass."' ";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0)
		{
			header('Location:home.php');
		}
		else 
		{
			echo "<div class='error-msg'>Login failed</div>";
		}
		}

		$mysqli->close();
	}
?>
<style type="text/css">
#btn
{
  position: absolute;
  right: 0;
  z-index: 2;
}
body{
	background-image:url('login7.jpg');
	background-position: center;
	background-size:cover;
}
.error-msg 
{
	color: #ffffff;
	font-size: 20px;
	font-family: elephant;
	text-align: center;
	margin-top: 50px;
}

</html>
