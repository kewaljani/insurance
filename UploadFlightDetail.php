<?php
include 'Connection.php';
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit'])) {
  $flight_id = $_POST['flight_id'];
  $airline_name = $_POST['airline_name'];
  $flight_type = $_POST['flight_type'];    
  $class_type = $_POST['class_type'];
  $from_place = $_POST['from_place'];
  $to_place = $_POST['to_place'];
  $d_date = $_POST['d_date'];
  $no_of_seats = $_POST['no_of_seats'];

  $sql="INSERT INTO flight_detail (flight_id,airline_name,flight_type,class_type,from_place,to_place,d_date,no_of_seats) 
          VALUES('" . $flight_id . "','" . $airline_name . "','" . $flight_type . "','" . $class_type . "','" . $from_place . "','" . $to_place . "','" . $d_date . "','" . $no_of_seats . "')";

   $result=$conn->query($sql);
  if ($result === TRUE) {
    echo "<script>alert('Flight Details added successfully')</script>";
    // echo '<script>window.location="UserLogIn.php"</script>';
  } else {
    echo "<script>alert('Please enter proper detail')</script>";
    // echo '<script>window.location="UserSignUP.php"</script>';
  }
}
?>
