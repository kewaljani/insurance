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
    <script type="text/javascript">
        function check()
        {

        var amount = document.getElementById('amount').value;
        if (amount><?php echo $_SESSION['amountl']; ?>)
        {
            alert("please enter valid value");
        }
        if(<?php echo $_SESSION['amountl']; ?> ==0)
        {
            alert("thankyou");
             window.location.href="insurance.php";
        }
        else{
            var xhttp;
                    xhttp = new XMLHttpRequest(); // Obect of xmlhttp request
                    xhttp.onreadystatechange = function() {
                        if (xhttp.readyState == 4 && xhttp.status == 200) {
                            alert(xhttp.response);
                             var myObj = JSON.parse(JSON.stringify(this.responseText));
                             // alert(myObj);
                                // var array=myObj.split('<br>');
                                // var display= JSON.parse(array[0]);
                                // alert(display)
                                window.location.href="paymentmethod.php";
                            }
                        } 
                    xhttp.open("POST", "paymentsess.php", true); // this is the url
                    parameters = "amount= "+amount;
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send(parameters);


        // alert(amount);
        }
        }
    </script>
    <title>Payment</title>
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
                                        <a class="nav-link menulink" href="#">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menulink" href="#">Contact Us</a>
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
                <a href="invoice.php">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>Payment
                </a>
            </li>
        </ul>
    </div>
    <!-- Body -->
    <div class="content-container">
        <!-- Content -->
        <div class="row p-4">
            <div class="col-8">
                <form method="POST" class="form_light_detail" id="form" enctype="multipart/form-data">
                    <div class="row p-4">
                        <div class="col-12 text_white fw-bolder">
                            <h1>Payment</h1>
                        </div>
                        <hr />
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label text_white" for="amount">Enter Amount</label>
                                <input type="text" id="amount" name="amount" class="form-control" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label text_white" for="card_no">Card Numbeer</label>
                                <input type="text" id="card_no" name="card_no" class="form-control" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label text_white" for="card_name">Name on card</label>
                                <input type="text" id="card_name" name="card_name" class="form-control" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-outline">
                                <label class="form-label text_white" for="exp_date">Expiry Date</label>
                                <input type="date" id="exp_date" name="exp_date" class="form-control" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-outline">
                                <label class="form-label text_white" for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <div class="form-outline">
                                <button type="button" class="btn btn-secondary mt-4 mb-4" onclick="check();">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>