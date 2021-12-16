
<?php

 include 'Connection.php';
 $result = $conn->query("SELECT * FROM `kjana_psngr` where `passenger_id`='".$_REQUEST['pid']."' ORDER BY passenger_id ;");
 // echo $result;
 $row = mysqli_fetch_assoc($result);
                            // print_r($row)
                            $myArr = array(
					// 'display'=>$sess[0],
					'pid'=>$row["passenger_id"],
					'fname'=>$row["first_name"],
					'lname'=>$row["last_name"],
					'dob'=>$row["dob"],
					'email'=>$row["email"],
					'gender'=>$row['gender'],
					'passport'=>$row["pass_no"],
					'passexp'=>$row["pass_exp"],
					'email'=>$row["email"],
					'ccode'=>$row["country_code"],
					'street'=>$row["street"],
					'city'=>$row["city"],
					'state'=>$row["state"],
					'country'=>$row["country"],
					'zipcode'=>$row["zipcode"],
					'nationality'=>$row["nationality"],
					'mobileno'=>$row["mobile_no"]
				);
                            echo json_encode($myArr)."<br>";
 // print_r($result);
?>