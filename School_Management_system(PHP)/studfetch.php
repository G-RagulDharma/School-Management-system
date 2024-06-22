<html>
<body>

<style type="text/css">
#btn
{
  position: absolute;
  left: 1200;
  z-index: 2;
}
#btn1
{
  position:absolute;
  right: 0;
  z-index: 200;
}
body{
	background-image:url('dy.jpg');
	background-repeat:no-repeat;
	background-size:cover;
}
</style>
<form method="post">
<h1 style="color:#ff6ec7;"><center>SEARCHING</center></h1>
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="stud1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a><br>
CLASS    :<input type="text" name="sclass"><br><br>
<input type="submit" value="SEARCH">

</form>
<?php
	
    @$sclass=$_POST["sclass"];
    $servername="localhost";
    $username="root";
    $password="";
    $database="myDB12";
    
    $conn=mysqli_connect($servername,$username,$password,$database);
    $query="select sna from t2 where sclass='$sclass' ";
	echo "<br><br>";
    echo "<span style='color:#e90ebe;font-size:30px;font-family:arial'>---NAME---<br>";
    
    $count = 0; 
    
    if($result=$conn->query($query))
    {
        while($row=$result->fetch_assoc())
        {
            $f6=$row["sna"];
            echo "<br>";
            echo "<span style='color:#0180ff;font-size:20px;'>&emsp; $f6 ";
            echo "<br><br>";
            $count++; 
        }
        
       
        if($count == 0) {
            echo "<br><center>No Record Found</center>";
        }
    }
    
?>


</body>
</html>