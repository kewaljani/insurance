<?php
session_start();
	$ennum=$_REQUEST["email"];
	$pswrd=$_REQUEST["pwrd"];

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
		  $q="SELECT * FROM `kjana_psngr` where `email`='".$ennum."' and `password`='".$pswrd."';";
		  $sq=mysqli_query($conn,$q);
		  // echo $q;
	  
		if(mysqli_num_rows($sq)>0)
		{
			while($row = mysqli_fetch_assoc($sq)) {
			 $_SESSION["name"]= $row["first_name"]. " " . $row["last_name"]."<br>";
			 $_SESSION["pid"] = $row['passenger_id'];
			 // $row[branch]."<br>".$row[year]."<br>".$row[enrollment_number];
			 	// echo $_SESSION["name"]." ".$_SESSION['pid'];
				// header("location:home.php");
		}
	}
		else{

			echo "Wrong user name or password";
			// header("location:login.php");
	  }


	}
}
	else{
		echo "please enter details";
		// header("location:login.php");
	}
?>
