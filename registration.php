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
$Surname = $_POST{'SUR_NAME'};
$Yourname = $_POST{'YOUR_NAME'};
$Phone = $_POST{'PHONE_NUMBER'};
$Email = $_POST{'EMAIL_ID'};

$sql = "INSERT INTO raghava (SUR_NAME,YOUR_NAME,PHONE_NUMBER,EMAIL_ID) VALUES ('$Surname','$Yourname','$Phone','$Email')";

if(!mysqli_query($con,$sql))
{
	include 'fail.html';
}
else
{
	
	include 'test.html';
	
}

?>

