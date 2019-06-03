<?php
$con = mysqli_connect('localhost','raghava','Communication1,');

if(!$con)
{
	echo 'not connected';
}
if(!mysqli_select_db($con,'mydb'))
{
	echo 'database not selected';
}

$sql = "TRUNCATE raghava";

if(!mysqli_query($con,$sql))
{
	include 'fdelete.html';
}
else
{
	
	include 'sdelete.html';
}

?>