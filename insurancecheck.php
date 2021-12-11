<?php
session_start();
$_SESSION["passengerno"] =  $_REQUEST['peopleno'];
$firstname = $_REQUEST["fname"];
$lastname = $_REQUEST["lname"];
$ccode = $_REQUEST['ccode'];
$contact = $_REQUEST['contact'];
$peopleno = $_REQUEST['peopleno'];
$data = $_REQUEST['data'];

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
  $nq = "SELECT `mobile_no` from `kjana_psngr` where `passenger_id` =  '".$_SESSION['pid']."'";
  $id = $conn->query($nq);
  $fno = mysqli_fetch_assoc($id);
  if ($fno['mobile_no']==$contact)
  {
    echo "cannot enter your contact number";

 }
 else
 {
   $q =   "INSERT INTO `kjana_cust`(`fname`,`lname`,`no_passenger`, `eme_contact`, `passenger_id`, `ccode`, `ctype`) VALUES ('".$firstname."', '".$lastname."','".$peopleno."','".$contact."','".$_SESSION['pid']."','".$ccode."','".$data."');";
   if ($conn->query($q) === TRUE) {
          // 
          // 
          // $_session['passenger_id'] = $finfo['passenger_id'] ;
    echo "inserted";
  }
  else
  {

    echo "Error: " . $q. "<br>" . $conn->error;
  }

  $conn->close();

}

}