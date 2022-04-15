<?php
require 'dbconnect.php';
$sub=$_POST['city'];
$qry="SELECT * FROM table_area where city_id=$sub";
// echo $qry;
$rs=mysqli_query($conn,$qry);
while($row=mysqli_fetch_assoc($rs))
{
	echo "<option value=".$row['area_id'].">".$row['area_name']."</option>";
}
?>