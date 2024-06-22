<html>
<body>
<a href="home.php" ><img src="home.jpg" alt="HOME" id="btn" width="80" height="50"></a>
<a href="stud1.php" ><img src="back.jpg" alt="BACK" id="btn1" width="50" height="50"></a>
<form method="post"><br><br>
ROLLNO    :<input type="number" name="srn"><br><br>
<input type="submit" value="DELETE">

</form>
<?php
    @$srn=$_POST["srn"];
    $servername="localhost";
    $username="root";
    $password="";
    $database="myDB12";
    
    $conn=new mysqli($servername,$username,$password,$database);

    
    $sql = "DELETE FROM t2 WHERE srn='".$srn."' ";
    
    
    if ($conn->query($sql) == TRUE) 
    {
        if(mysqli_affected_rows($conn)>0)
		{
            echo "<span style='color:#e90ebe;font-size:30px;font-family:arial'> Record deleted successfully";
        }
		else
		{
            echo "<span style='color:#e90ebe;font-size:30px;font-family:arial'> No record found to delete";
        }
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