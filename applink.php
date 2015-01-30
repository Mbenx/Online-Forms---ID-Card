<html>
<body>
<?php

if(isset($_GET['entry']))
{
$var1=$_GET['entry'];
//echo $var1;
}
$con=mysqli_connect("localhost","root","umesh","Id_DB");							// Create connection

if (mysqli_connect_errno())															// Check connection
  {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT * FROM persons WHERE Entry='$var1'";
$result = mysqli_query($con,$sql);
$info = mysqli_fetch_array( $result );
echo "<b>DETAILS OF STUDENT<b><br>";
Print "<b>Name:</b> ".$info['Name'] . " <br>"; 
Print "<b>Entry:</b> ".$info['Entry'] . " <br>"; 
Print "<b>Relation:</b> ".$info['Relation'] ." ".$info['Relations_Name']."<br>"; 
Print "<b>Department:</b> ".$info['Department'] . " <br>"; 
Print "<b>Date Of Birth:</b> ".$info['DOB'] . " <br>"; 
Print "<b>Address:</b> ".$info['Address'] . " <br>"; 
$Roll=$info['Entry'];
echo $Roll;
?>
<form action="http://10.1.9.36/Project_Final/test.php?var=<?php echo $Roll; ?>" method="POST" enctype="multipart/form-data">
<div ALIGN="center" class = "abc">RELATION: 
<input type="radio" name="agree" value="yes">Accept
<input type="radio" name="agree" value="no">reject
</div>
<div ALIGN="center" class="cool"> <input type="submit" name="submit" value="Submit"> </div>
</form>
</body>
</html>
