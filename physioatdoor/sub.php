<?php
require 'dbconnect.php';
$sub=$_POST['state'];
$qry="SELECT * FROM table_cities where 	state_id=$sub";
$rs=mysqli_query($conn,$qry);
while($row=mysqli_fetch_assoc($rs))
{
	echo "<option value=".$row['city_id'].">".$row['city_name']."</option>";
}
?>