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
        function next() {
            alert("hey");
            var x = <?php echo (int)$_SESSION["passengerno"] - 1; ?>;
            alert(x)
            var first = document.getElementById('fname').value;
            var last = document.getElementById('lname').value;
            var bday = document.getElementById('bdate').value;
            var nationality = document.getElementById('nationality').value;
            var gender = document.getElementById('gender').value;
            var pnumber = document.getElementById('pnumber').value;
            var expdate = document.getElementById('pexpdate').value;
            var email = document.getElementById('email').value;
            var ccode = document.getElementById('ccode').value;
            var mnumber = document.getElementById('mnumber').value;
            // var pswrd=document.getElementById('pswrd').value;
            // var cpswrd=document.getElementById('cpswrd').value;
            var straddr = document.getElementById('straddr').value;
            var city = document.getElementById('city').value;
            var state = document.getElementById('state').value;
            var country = document.getElementById('country').value;
            var zipcode = document.getElementById('zipcode').value;
            xhttp = new XMLHttpRequest(); // Obect of xmlhttp request
            if (x > 0) {
                xhttp = new XMLHttpRequest(); // Obect of xmlhttp request
                xhttp.onreadystatechange = function() {
                    if (xhttp.readyState == 4 && xhttp.status == 200) { // Check the status - if everything goes fine
                        alert(xhttp.response)
                        // if (output === 'User Already exist please login')
                        // {
                        //  window.location.href="login.php"
                        // } 
                        // window.location.href="login.php"// display the content (response) from the serverside page
                        window.location.href = "passengerdetails.php"
                    }
                }

                xhttp.open("POST", "db2.php", true); // this is the url
                parameters = "email= " + email + "&bday=" + bday + "&nationality=" + nationality + "&gender=" + gender + "&pnumber=" + pnumber + "&expdate=" + expdate + "&ccode=" + ccode + "&mnumber=" + mnumber + "&straddr=" + straddr + "&city=" + city + "&state=" + state + "&country=" + country + "&zipcode=" + zipcode + "&first=" + first + "&last=" + last;
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(parameters);
            } else {
                xhttp = new XMLHttpRequest(); // Obect of xmlhttp request
                xhttp.onreadystatechange = function() {
                    if (xhttp.readyState == 4 && xhttp.status == 200) { // Check the status - if everything goes fine
                        alert(xhttp.response)
                        // if (output === 'User Already exist please login')
                        // {
                        //  window.location.href="login.php"
                        // } 
                        // window.location.href="login.php"// display the content (response) from the serverside page
                        window.location.href = "editpage.php"
                    }
                }

                xhttp.open("POST", "db2.php", true); // this is the url
                parameters = "email= " + email + "&bday=" + bday + "&nationality=" + nationality + "&gender=" + gender + "&pnumber=" + pnumber + "&expdate=" + expdate + "&ccode=" + ccode + "&mnumber=" + mnumber + "&straddr=" + straddr + "&city=" + city + "&state=" + state + "&country=" + country + "&zipcode=" + zipcode + "&first=" + first + "&last=" + last;
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(parameters);
            }
        }

        function change() {

            alert(x)
            var first = document.getElementById('fname').value;
            var last = document.getElementById('lname').value;
            var bday = document.getElementById('bdate').value;
            var nationality = document.getElementById('nationality').value;
            var gender = document.getElementById('gender').value;
            var pnumber = document.getElementById('pnumber').value;
            var expdate = document.getElementById('pexpdate').value;
            var email = document.getElementById('email').value;
            var ccode = document.getElementById('ccode').value;
            var mnumber = document.getElementById('mnumber').value;
            // var pswrd=document.getElementById('pswrd').value;
            // var cpswrd=document.getElementById('cpswrd').value;
            var straddr = document.getElementById('straddr').value;
            var city = document.getElementById('city').value;
            var state = document.getElementById('state').value;
            var country = document.getElementById('country').value;
            var zipcode = document.getElementById('zipcode').value;
            alert(first)
            alert(last)
            alert(bday)
            alert(nationality)
            alert(gender)
            alert(pnumber)
            alert(expdate)
            alert(email)
            alert(ccode)
            alert(mnumber)
            alert(straddr)
            alert(city)
            alert(country)
            alert(zipcode)
            // window.location.href="flightDetailForm.php"
            xhttp = new XMLHttpRequest(); // Obect of xmlhttp request
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) { // Check the status - if everything goes fine
                    alert(xhttp.response)
                    // if (output === 'User Already exist please login')
                    // {
                    //  window.location.href="login.php"
                    // } 
                    // window.location.href="login.php"// display the content (response) from the serverside page
                    window.location.href = "flightDetailForm.php"
                }
            }

            xhttp.open("POST", "db2.php", true); // this is the url
            parameters = "email= " + email + "&bday=" + bday + "&nationality=" + nationality + "&gender=" + gender + "&pnumber=" + pnumber + "&expdate=" + expdate + "&ccode=" + ccode + "&mnumber=" + mnumber + "&straddr=" + straddr + "&city=" + city + "&state=" + state + "&country=" + country + "&zipcode=" + zipcode + "&first=" + first + "&last=" + last;
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(parameters);
        }
    </script>
    <style>
        label {
            color: white
        }

        .error {
            color: red;
        }

        .bgroudcolor {
            background: linear-gradient(to right, #000000, #636c6d);
        }

        .upload-btn {
            background: white;
            font-size: 20px;
            font-weight: 400;
            color: black;
            border-radius: 26px;
            border: 1px solid white;
            margin-top: 20px;
            width: 125px;
        }
    </style>
    <title>Flight Detail</title>
</head>

<body style="background-color:grey;">
    <!-- Header -->
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="box-shadow: inset 0 0 10px #000000;  z-index: 50;top: 0;position: fixed;width: 100%;height: 60px;">>
                <div class="container-fluid ">
                    <div class="raw w-100 d-flex justify-content-between">
                        <div class="col">
                            <a class="navbar-brand" href="#">SAME INSURANCE</a>
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
            <div class="col-12">
                <form method="POST" class="form_light_detail" id="form" enctype="multipart/form-data">
                    <div class="row p-4">
                        <div class="col-12 text_white fw-bolder">
                            <h1>Passenger Detail</h1>
                        </div>
                        <div class="col-6">
                            <div class="form-outline">
                                <input type="text" id="fname" placeholder="first name" name="fname" class="form-control" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-outline">
                                <input type="text" id="lname" placeholder="last name" name="lname" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="text" id="nationality" placeholder="Nationality" name="nationality" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="Text" id="email" placeholder="Email" name="flight_id" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="form-label text_white" for="flight_id" style="margin: 30px 0 0 10px;"> Date Of Birth :</label>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="date" id="bdate" placeholder="Gender" name="bdate" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="text" id="pnumber" placeholder="passport Number" name="pnumber" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="Text" id="gender" placeholder="Gender" name="gender" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="form-label text_white" for="flight_id" style="margin: 30px 0 0 10px;"> passport Expiry date :</label>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="date" id="pexpdate" placeholder="Gender" name="pexpdate" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="number" id="ccode" placeholder="country code" name="ccode" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="number" id="mnumber" placeholder="Mobile number" name="mnumber" class="form-control" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="text" id="straddr" placeholder="Street Address" name="straddr" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="text" id="city" placeholder="City" name="city" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="Text" id="state" placeholder="state" name="state" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="Text" id="country" placeholder="country" name="country" class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline">
                                <label class="form-label text_white" for="flight_id"></label>
                                <input type="text" id="zipcode" placeholder="zipcode" name="zipcode" class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <!-- Submit button -->
                            <button type="button" class="btn-secondary mt-4 mb-4" style="display: block" onclick='next();'>Next Passenger</button>
                            <button type="button" class="btn-secondary mt-4 mb-4" style="display: none" onclick='change();'>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div></div>
</body>

</html>