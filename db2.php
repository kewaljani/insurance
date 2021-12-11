<?php
session_start();
echo "hello";
$firstname = $_REQUEST["first"];
  $lastname = $_REQUEST["last"];
  // $pswrd = $_REQUEST["pswrd"];
  // $cpass = $_REQUEST["cpswrd"];
  $email = $_REQUEST["email"];
  $bday = $_REQUEST['bday'];
  $nationality = $_REQUEST['nationality'];
  $gender = $_REQUEST['gender'];
  $pnumber = $_REQUEST['pnumber'];
  $expdate = $_REQUEST['expdate'];
  $ccode = $_REQUEST['ccode'];
  $mnumber = $_REQUEST['mnumber'];
  $straddr = $_REQUEST['straddr'];
  $city = $_REQUEST['city'];
  $state = $_REQUEST['state'];
  $country = $_REQUEST['country'];
  $zipcode = $_REQUEST['zipcode'];
echo $email." ".$firstname." ".$lastname." ".$pswrd." ".$cpass." ".$bday." ".$nationality." ".$gender." ".$pnumber." ".$expdate." ".$ccode." ".$mnumber." ".$straddr." ".$city." ".$state." ".$country." ".$zipcode;
?>