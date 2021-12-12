<?php
session_start();
// echo "yolo";
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
	$q="SELECT * FROM `kjana_psngr` where `passenger_id`= '".$pid."'" ;
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
					'pid'=>$row["passenger_id"],
					'fname'=>$row["first_name"],
					'lname'=>$row["last_name"],
					'dob'=>$row["dob"],
					'email'=>$row["email"],
					'gender'=>$row['gender'],
					'passport'=>$row["pass_no"],
					'passexp'=>$row["pass_exp"],
					'email'=>$row["email"],
					'ccode'=>$row["country_code"],
					'street'=>$row["street"],
					'city'=>$row["city"],
					'state'=>$row["state"],
					'country'=>$row["country"],
					'zipcode'=>$row["zipcode"],
					'nationality'=>$row["nationality"],
					'mobileno'=>$row["mobile_no"]
				);
				$_SESSION['updateuser'] = $myArr;
 			 echo json_encode($myArr)."<br>";
 			 // echo $_SESSION['updateuser'];

			}
		}
}

?>