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

    <title>Choose Payment Menthod</title>
</head>

<body style="background-color:gray;">
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
                                        <a class="nav-link menulink" href="AboutUs.php">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menulink" href="ContactUs.php">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menulink" href="login.php">LogOut</a>
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
            <div class="col-6">
                <form action="payment.php" method="POST" class="form_light_detail" id="form" enctype="multipart/form-data">
                    <div class="row p-4">
                        <div class="col-12 text_white mb-4">
                            <h2>Choose Payment Method</h2>
                        </div>
                        <div class="col-12 text_white fw-bolder border-bottom border-top py-4">
                            <h6>Payment of $50000</h6>
                        </div>
                        <div class="col-12 my-4">
                            <div class="py-3">
                                <input type="radio" id="debit" name="drone" value="debit" checked>
                                <label for="debit" class="ml-4">
                                    <div class="btn btn-secondary w-100">
                                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Debit Card
                                    </div>
                                </label>
                            </div>

                            <div class="py-3">
                                <input type="radio" id="credit" name="drone" value="credit">
                                <label for="credit" class="ml-4">
                                    <div class="btn btn-secondary">
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Credit Card
                                    </div>
                                </label>
                            </div>
                            <!-- <div class="py-3">
                                <input type="radio" id="louie" name="drone" value="split">
                                <label for="split" class="ml-4">
                                    <div class="btn btn-secondary w-100">
                                        Split Payment
                                    </div>
                                </label>
                            </div> -->
                        </div>
                        <div class="col-12 border-top pt-4 ">
                            <a href="payment.php">
                                <div class="btn btn-secondary w-100">

                                    Split the Payment

                                </div>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>