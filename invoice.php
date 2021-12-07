<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/invoice.css">
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
    <div class="container body_section" >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-xs-center"><strong>Invoice</strong></h3>
                    </div>
                        <div class="card-block m-3">
                            <div class="text-xs-center">
                                <i class="fa fa-search-plus float-xs-left icon"></i>
                                <h4>Invoice for purchase #33221(Invoice ID)</h4>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card height">
                                        <div class="card-header">Customer</div>
                                        <div class="card-block p-3">
                                            <p><strong>Name:</strong>XYZ</p>
                                            <p><strong>Address:</strong>1111 Army Navy Drive Arlington VA</p>
                                            <p><strong>Email:</strong>xyz@gmail.com</p>
                                            <p><strong>DOB:</strong>23/5/2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card height">
                                        <div class="card-header">Insurance Dtail</div>
                                        <div class="card-block p-3">
                                            <p><strong>Provider:</strong>Name of Insurance Company</p>
                                            <p><strong>Address:</strong>1111 Army Navy Drive Arlington VA</p>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card height">
                                        <div class="card-header">Flight Detail</div>
                                        <div class="card-block p-3">
                                            <p><strong>Flight Name:</strong>Air India</p>
                                            <p><strong>Detail:</strong>wer erthj werty werty wert wert.</p>
                                            <p><strong>Departure Date:</strong>11/10/2022</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card-block m-3">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <td><strong>Insurance Name</strong></td>
                                        <td class="text-xs-center"><strong>Insurance ID</strong></td>
                                        <td class="text-xs-center"><strong>Insurance Discription</strong></td>
                                        <td class="text-xs-right"><strong>Cost</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ABCD</td>
                                        <td class="text-xs-center">12345</td>
                                        <td class="text-xs-center">Samsung Galaxy S5 Extra Battery</td>
                                        <td class="text-xs-right">$1000.00</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="text-xs-center"></td>
                                        <td class="text-xs-center"><strong>Total</strong></td>
                                        <td class="text-xs-right"><strong>$1000.00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>