<?php
session_start();
$aname = $_REQUEST['aname'];
$dac = $_REQUEST['dac'];
$dt = $_REQUEST['dt'];
$aac = $_REQUEST['aac'];
$at = $_REQUEST['at'];
$mealplan = $_REQUEST['meal_plan'];
$cabinclass = $_REQUEST['cabin_class'];
$flightno = $_REQUEST['flightno'];
// echo $mealplan." ".$cabinclass;


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
        else{
        	$q = "INSERT INTO `kjana_fa`(`dairport_code`, `aairport_code`, `dtime`, `atime`,`aname`) VALUES ('".$dac."','".$aac."','".$dt."','".$at."','".$aname."');";


	// $sq=mysqli_query($conn,$q);
	 if ($conn->query($q) === TRUE) {

        	$faid = "SELECT max(`flight_id`) as 'flight_id' from `kjana_fa`";
        	$id = $conn->query($faid);
	 	$fif = mysqli_fetch_assoc($id);
	 	$_SESSION['flight_id'] = $fif['flight_id'];
	 	// echo $fif['flight_id'];


	 	$cid = "SELECT `class_id` from `kjana_cclass` where `ctype` ='".$cabinclass."';";
	 	echo $cid;
	 	$id = $conn->query($cid);
	 	$idc = mysqli_fetch_assoc($id);
	 	// echo $idc['class_id'];

        	$mid = "SELECT `meal_id` from `kjana_mplan` where `m_code`='".$mealplan."';";
	 	$id = $conn->query($mid);
	 	$imd = mysqli_fetch_assoc($id);
	 	// echo $imd['meal_id'];
	 	echo $imd['meal_id']." ".$idc['class_id']." ".$fif['flight_id']." ".$_SESSION['pid'];
	 	echo "inserted";
	 	$fquery = "INSERT INTO `kjana_fc`(`class_id`, `meal_id`, `flight_id`, `passenger_id`) VALUES ('".$idc['class_id']."','".$imd['meal_id']."','".$fif['flight_id']."','".$_SESSION['pid']."')";
	 	$conn->query($fquery);
	 	echo "inserted";
	 }
	 else{
	 	echo "Error: " . $faid. "<br>" . $conn->error;
	 }

        $conn->close();
    }