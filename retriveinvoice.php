<?php
session_start();
// echo $_SESSION['flight_id'];
// echo $_SESSION['pid'];
// echo $_SESSION['insurance'];
// echo $_REQUEST['totalp'];

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
	$q="SELECT * FROM `kjana_psngr` where `passenger_id`= '".$_SESSION['pid']."';" ;
	$flight = "SELECT * from `kjana_fa` where `flight_id`=".$_SESSION['flight_id']."";
	$ins = "SELECT `cost`,`discription` from `kjana_ins` where `INAME`='".$_SESSION['insurance']."'";
	$count = "SELECT count(passenger_id) from `kjana_psngr` where booking_id='".$_SESSION['pid']."';";

	// echo $count;
	$sq=mysqli_query($conn,$q);
	$sq2=mysqli_query($conn,$flight);
	$sq3 = mysqli_query($conn,$ins);
	$sq4 = mysqli_query($conn,$count);
	// $row = mysqli_num_rows($sq)
	$row = mysqli_fetch_assoc($sq);
	$row2 = mysqli_fetch_assoc($sq2);
	$row3 = mysqli_fetch_assoc($sq3);
	$row4 = mysqli_fetch_row($sq4);
	// print_r($row4[0]);
	$myArr = array(
					// 'display'=>$sess[0],
					'name'=>$row["first_name"]." ".$row["last_name"],
					'dob'=>$row["dob"],
					'email'=>$row["email"],
					'mobileno'=>$row["mobile_no"],
					'dtime'=>$row2['dtime'],
					'description'=>$row3['discription'],
					'cost'=>$row3['cost'],
					'total'=>$row4[0],
					'fname'=>$row2['aname']
				);
	$amount = $row3['cost']*$row4[0];
	$_SESSION['amountl'] = $amount;
	// echo $amount;
	$insert = "INSERT into `kjana_invoice` ( `invoice_amount`, `amount_left`, `flight_id`) VALUES ('".$amount."','".$amount."','".$_SESSION['flight_id']."') " ;
	$sq5 = mysqli_query($conn,$insert);
	 echo json_encode($myArr)."<br>";
}	
?>