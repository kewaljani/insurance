<?php
session_start();
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
       else{
       $q = 	"INSERT INTO `kjana_cust`(`fname`,`lname`,`no_passenger`, `eme_contact`, `passenger_id`, `ccode`, `cid`, `ctype`) VALUES ('".$firstname."', '".$lastname."','".$peopleno."','".$contact."','".$_cookie."');";
       }