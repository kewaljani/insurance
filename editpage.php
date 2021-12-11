<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <title>Invoice</title>
    <script type="text/javascript">
            function retrive()
          {
                    //alert("hey")
                    //var uname = document.getElementById("uname").value;
                    var xhttp;
                    xhttp = new XMLHttpRequest(); // Obect of xmlhttp request
                    xhttp.onreadystatechange = function() {
                        if (xhttp.readyState == 4 && xhttp.status == 200) { // Check the status - if everything goes fine
                            //echo myarray.row;
                        var myObj = JSON.parse(JSON.stringify(this.responseText));
                                var array=myObj.split('<br>');
                    alert(myObj);

                            var display= JSON.parse(array[0]);
                            //alert(display.display);
                            document.getElementById("login_name").innerHTML=display.display;
                            for (i = 0; i <array.length-1; i++) {
                                //alert(array[i]);
                                var parser=JSON.parse(array[i]);
                            document.getElementById(i+11).innerHTML =parser.name;// display the content (response) from the serverside page
                                document.getElementById(i+1).innerHTML= parser.subject;
                            }

                        }
                    }
                    xhttp.open("POST", "updatedetail.php", true); // this is the url
                //  parameters = "uname= "+uname;
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send();
}
    </script>
</head>

<body style="background-color:grey" onload="retrive();">
    <!-- Header -->
 
	<div class="row">
		<div class="col">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid ">
                    <div class="raw w-100 d-flex justify-content-between">
                        <div class="col">
                            <a class="navbar-brand" href="#">LOGO</a>
                        </div>
                        <div class="col">
                            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarColor02">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="home.php">TimeLine</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="flightDetailForm.php">Flights</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="insurance.php">Insurance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="invoice.php">Invoice</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="#">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">SignUp</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">LogOut</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
	</div>
    <!-- Body -->
    <div class="row g-3 pt-2 d-flex justify-content-center body_section" style="background-color:grey">
    <div class="container">
            <!-- Side bar -->
                <!-- <div class="row px-5 py-2 custom_border nav-item"><h5><a class="nav-link" href="home.php">TimeLine</a></h5></div>
                <div class="row px-5 py-2 custom_border nav-item"><h5><a class="nav-link" href="flightDetailForm.php">Flights</a></h5></div>
                <div class="row px-5 py-2 custom_border nav-item"><h5><a class="nav-link" href="home.php">Home</a></h5></div>
                <div class="row px-5 py-2 custom_border nav-item"><h5><a class="nav-link" href="invoice.php">Invoice</a></h5></div> -->
            <!-- Listing of Flight Detai Cards -->
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end p-2">
                        <a href="flightDetailForm.php" class="btn btn-secondary mx-3">Passenger Detail</a>
                    </div>
                    <!-- Loop the below Card -->
                        <!-- Card 1 -->
                        <div class="card m-2">
                    <div class="col-sm-12">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>passenger Name</div>
                                    <div>mobile no</div>   
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6"><h6>Dob:</h6></div>
                                    <div class="col-sm-6"><h6>Passport Details:</h6></div>  
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><h6 >Email: </h6></div>
                                    <div class="col-sm-6"><h6 >Nationality  : </h6></div>   
                                </div>
                                <div class="row"><div class="col-sm-12"><h6>Mobile No</h6></div></div>
                                <p class="card-text">
                                </p>
                                <a href="updatedetail.php" class="btn btn-secondary">Passenger Detail</a>
                            </div>
                        </div> 
                        </div> 
                        <!-- Card 2 -->
                        <!-- <div class="card m-2">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>Flight Name</div>
                                    <div>Flight Id</div>   
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6"><h6>Departure: From</h6></div>
                                    <div class="col-sm-6"><h6>Destination: To</h6></div>  
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><h6 >Departure Date: 23/5/2022</h6></div>
                                    <div class="col-sm-6"><h6 >Travel Class: Buisness Class</h6></div>   
                                </div>
                                <div class="row"><div class="col-sm-12"><h6>No of Seats: 2</h6></div></div>
                                <p class="card-text">
                                    Arline detail........
                                </p>
                                <a href="insurancepage.php" class="btn btn-secondary">Insurance Detail</a>
                            </div>
                        </div>  --> 
                    <!-- </div>     -->
                </div>          
            <div>
        <div>        
    </div>
</div>
</body>
</html>