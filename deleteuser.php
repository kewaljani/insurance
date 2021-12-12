<?php
session_start();
$db="kjana_fame";
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$db_name = $db;
$pid = $_REQUEST["pid"];
$conn = new mysqli($host, $dbUsername, $dbPassword, $db_name);
if (mysqli_connect_error())
{
 echo "errror";
 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else
{
	$q = "DELETE FROM `kjana_psngr` WHERE `passenger_id`= '".$pid."';";
	$sq=mysqli_query($conn,$q);
	 if ($conn->query($q) === TRUE) {

	 }
	 else{
	 	echo "Error: " . $q. "<br>" . $conn->error;
	 }

        $conn->close();
    }
?>