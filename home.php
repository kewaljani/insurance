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
<body>
    <!-- Header -->
	<div class="row">
		<div class="col">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid ">
                    <div class="raw w-100 d-flex justify-content-between">
                        <div class="col">
                            <a class="navbar-brand" href="#">Navbar</a>
                        </div>
                        <div class="col">
                            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarColor02">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                    <a class="nav-link" href="home.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="timeLine.php">TimeLine</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="flightDetailForm.php">Flights</a>
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
            <div class="col-sm-4"></div>
            <!-- Listing of Flight Detai Cards -->
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end p-2">
                        <a href="flightDetailForm.php"><button type="button" class="btn btn-primary">Add Flight</button></a>
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
                                <a href="insurancepage.php" class="btn btn-primary">Insurance Detail</a>
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
                                <a href="insurancepage.php" class="btn btn-primary">Insurance Detail</a>
                            </div>
                        </div>  
                    </div>    
                </div>          
            <div>
        <div>        
    </div>
</body>
</html>