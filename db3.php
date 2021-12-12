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
  $pid = $_REQUEST['pid'];
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
        
          $q = 
          "UPDATE `kjana_psngr` SET `first_name`='".$firstname."',`last_name`='".$lastname."',`nationality`='".$nationality."',`gender`='".$gender."',`pass_no`='".$pnumber."',`country_code`= '".$ccode."',`mobile_no`='".$mnumber."',`street`='".$straddr."',`city`= '".$city."',`state`='".$state."',`country`='".$country."',`zipcode`='".$zipcode."',`dob`='".$bday."',`pass_exp`='".$expdate."' WHERE `passenger_id`='".$pid."';";

          // $q = "INSERT INTO `kjana_psngr`(`first_name`, `last_name`, `dob`, `nationality`, `gender`, `pass_no`, `pass_exp`,`email`, `country_code`, `mobile_no`, `street`, `city`, `state`, `country`, `zipcode`, `c_val`,`booking_id`) VALUES (, , ,, , ,,,, , ,, , , ,'P',);";

        // echo $q;
        if ($conn->query($q) === TRUE) {
          // $nq = "SELECT `passenger_id` from `kjana_psngr` where `email` =  '".$email."'";
          // $id = $conn->query($nq);
          // $finfo = mysqli_fetch_assoc($id);
          // $_SESSION["passengerno"] = (int)$_SESSION["passengerno"]-1;

          echo "success";
          // 
          // $_session['passenger_id'] = $finfo['passenger_id'] ;
         }
        else {

            echo "Error: " . $q. "<br>" . $conn->error;
                      }

        $conn->close();
     
        
    }
?>