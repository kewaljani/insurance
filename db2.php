<?php
session_start();
// echo "hello";
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
echo $email." ".$firstname." ".$lastname." ".$bday." ".$nationality." ".$gender." ".$pnumber." ".$expdate." ".$ccode." ".$mnumber." ".$straddr." ".$city." ".$state." ".$country." ".$zipcode;
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
        $nq = "SELECT `email` from `kjana_psngr` where `email` =  '".$email."'";
        $id = $conn->query($nq);
        if (mysqli_num_rows($id)>0)
        {
          echo "User Already exist please login";
        }
        else{
          $q = "INSERT INTO `kjana_psngr`(`first_name`, `last_name`, `dob`, `nationality`, `gender`, `pass_no`, `pass_exp`,`email`, `country_code`, `mobile_no`, `street`, `city`, `state`, `country`, `zipcode`, `c_val`,`booking_id`) VALUES ('".$firstname."', '".$lastname."', '".$bday."','".$nationality."', '".$gender."', '".$pnumber."','".$expdate."','".$email."', '".$ccode."', '".$mnumber."', '".$straddr."', '".$city."', '".$state."', '".$country."', '".$zipcode."','P','".$_SESSION['pid']."');";

        // echo $q;
        if ($conn->query($q) === TRUE) {
          $nq = "SELECT `passenger_id` from `kjana_psngr` where `email` =  '".$email."'";
          $id = $conn->query($nq);
          $finfo = mysqli_fetch_assoc($id);
          // 
          // $_session['passenger_id'] = $finfo['passenger_id'] ;
         }
        else {

            echo "Error: " . $q. "<br>" . $conn->error;
                      }

        $conn->close();
     
        }
    }
?>