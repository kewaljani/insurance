<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/sidebar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Home</title>
</head>

<body style="background-color:gray">
    <!-- <?php
            // print_r($_SESSION['pid']);
            ?> -->
    <!-- Header -->
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="box-shadow: inset 0 0 10px #000000;  z-index: 50;top: 0;position: fixed;width: 100%;height: 60px;">
                <div class="container-fluid ">
                    <div class="raw w-100 d-flex justify-content-between">
                        <div class="col">
                            <a class="navbar-brand" href="#">LOGO</a>
                        </div>
                        <div class="col">
                            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarColor02">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link menulink" href="#">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menulink" href="#">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menulink" href="login.php">
                                            LogOut&nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- SideBar -->
    <div class="sidebar-container" style="box-shadow: inset 0 0 10px #000000; border-left:none">
        <ul class="sidebar-navigation">
            <li>
                <a href="home.php">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>TimeLine
                </a>
            </li>
            <li>
                <a href="flightDetailForm.php">
                    <i class="fa fa-plane" aria-hidden="true"></i>Flights
                </a>
            </li>
            <li>
                <a href="insurance.php">
                    <i class="fa fa-file-o" aria-hidden="true"></i>Insurance
                    <!-- <i class="fa fa-file-text" aria-hidden="true"></i>Insurance
                    <i class="fa fa-file" aria-hidden="true"></i>Insurance
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>Insurance -->
                </a>
            </li>
            <li>
                <a href="invoice.php">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>Invoice
                </a>
            </li>
            <li>
                <a href="paymentmethod.php">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>Payment
                </a>
            </li>
        </ul>
    </div>
    <!-- Body -->
    <div class="content-container">
        <!-- Content -->
        <div class="row p-4">
            <!-- <div class="col-sm-12 d-flex justify-content-end p-2">
                <a href="flightDetailForm.php" class="btn btn-secondary mx-3">Insurance Detail</a>
            </div> -->
            <!-- Loop the below Card -->
            <div class="col-sm-12">
                <!-- Card 1 -->
                <div class="card m-2">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div><strong>Flight Name</strong> </div>
                            <div>Flight Id</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6>Departure: From</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6>Destination: To</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h6>Departure Date: 23/5/2022</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6>Travel Class: Buisness Class</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h6>No of Seats: 2</h6>
                            </div>
                        </div>
                        <p class="card-text">
                            Arline detail........
                        </p>
                        <a href="insurance.php" class="btn btn-secondary">Insurance Detail</a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card m-2">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div><strong>Flight Name</strong> </div>
                            <div>Flight Id</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6>Departure: From</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6>Destination: To</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h6>Departure Date: 23/5/2022</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6>Travel Class: Buisness Class</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h6>No of Seats: 2</h6>
                            </div>
                        </div>
                        <p class="card-text">
                            Arline detail........
                        </p>
                        <a href="insurance.php" class="btn btn-secondary">Insurance Detail</a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card m-2">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div><strong>Flight Name</strong> </div>
                            <div>Flight Id</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6>Departure: From</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6>Destination: To</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h6>Departure Date: 23/5/2022</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6>Travel Class: Buisness Class</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h6>No of Seats: 2</h6>
                            </div>
                        </div>
                        <p class="card-text">
                            Arline detail........
                        </p>
                        <a href="insurance.php" class="btn btn-secondary">Insurance Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>