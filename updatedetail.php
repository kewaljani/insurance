<?php
session_start();
$db="kjana_fame";
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$db_name = $db;
$conn = new mysqli($host, $dbUsername, $dbPassword, $db_name);
if (mysqli_connect_error())
{
 echo "errror";
 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else
{
	$q="SELECT * FROM `kjana_psngr` where `booking_id`= '".$_SESSION['pid']."'" ;
	$sq=mysqli_query($conn,$q);
	if(mysqli_num_rows($sq)>0)
		{
			$x=mysqli_num_rows($sq);
			//echo $x;
			$y= $x%10	;
			$page=intval($x/10);
			$count=10;
			while($row = mysqli_fetch_assoc($sq)) {
				// print_r($row);
				$myArr = array(
					// 'display'=>$sess[0],
					'pid'=>$row['passenger_id'],
					'fname'=>$row["first_name"]." ".$row["last_name"],
					'dob'=>$row["dob"],
					'email'=>$row["email"],
					'passport'=>$row["pass_no"],
					'nationality'=>$row["nationality"],
					'mobileno'=>$row["mobile_no"]
				);
 			 echo json_encode($myArr)."<br>";
			}
		}
}

?>