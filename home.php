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
</head>

<body style="background-color:grey">
    <!-- Header -->
    <?php 
        print_r($_SESSION['pid']);
    ?>
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
    <div class="container-fluid">
        <div class="row">
            <!-- Side bar -->
            <div class="col-sm-3 border-right custom_border navbar-nav me-auto" >
                <!-- <div class="row px-5 py-2 custom_border nav-item"><h5><a class="nav-link" href="home.php">TimeLine</a></h5></div>
                <div class="row px-5 py-2 custom_border nav-item"><h5><a class="nav-link" href="flightDetailForm.php">Flights</a></h5></div>
                <div class="row px-5 py-2 custom_border nav-item"><h5><a class="nav-link" href="home.php">Home</a></h5></div>
                <div class="row px-5 py-2 custom_border nav-item"><h5><a class="nav-link" href="invoice.php">Invoice</a></h5></div> -->
            </div>
            <!-- Listing of Flight Detai Cards -->
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end p-2">
                        <a href="flightDetailForm.php" class="btn btn-secondary mx-3">Insurance Detail</a>
                    </div>
                    <!-- Loop the below Card -->
                    <div class="col-sm-12">
                        <!-- Card 1 -->
                        <div class="card m-2">
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
                        </div>  
                        <!-- Card 2 -->
                        <div class="card m-2">
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
                        </div>  
                    </div>    
                </div>          
            <div>
        <div>        
    </div>
</body>
</html>