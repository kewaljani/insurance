<?php
session_start();
	$ennum=$_REQUEST["email"];
	$pswrd=$_REQUEST["pwrd"];
	echo $pswrd
if (!empty($ennum) || !empty($pass))
	{
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
    $dbname = "kjana_fame";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	 if (mysqli_connect_error())
     {
      die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      }
	  else
	  {
		  $q="SELECT * FROM `kjana_admin` where `email`='".$ennum."' and `password`='".$pswrd."';";
		  $sq=mysqli_query($conn,$q);
		  // echo $q
	  		
		


	}
}
	else{
		echo "please enter details";
		// header("location:login.php");
	}
?>
