<?php
session_start();
echo json_encode($_SESSION['updateuser']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function next() {
            alert("hey");
            // alert(x)
            var x = <?php echo json_encode($_SESSION['updateuser']);  ?>;
            var array = JSON.parse(JSON.stringify(x));
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

            xhttp.open("POST", "db3.php", true); // this is the url
            parameters = "email= " + email + "&bday=" + bday + "&nationality=" + nationality + "&gender=" + gender + "&pnumber=" + pnumber + "&expdate=" + expdate + "&ccode=" + ccode + "&mnumber=" + mnumber + "&straddr=" + straddr + "&city=" + city + "&state=" + state + "&country=" + country + "&zipcode=" + zipcode + "&first=" + first + "&last=" + last + "&pid=" + array.pid;
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(parameters);
        }

        function change() {
            var x = <?php echo json_encode($_SESSION['updateuser']);  ?>;
            var array = JSON.parse(JSON.stringify(x));
            // alert(array.fname)
            document.getElementById('fname').value = array.fname;
            document.getElementById('lname').value = array.lname;
            document.getElementById('bdate').value = array.dob;
            document.getElementById('nationality').value = array.nationality;
            document.getElementById('gender').value = array.gender;
            document.getElementById('pnumber').value = array.passport;
            document.getElementById('pexpdate').value = array.passexp;
            document.getElementById('email').value = array.email;
            document.getElementById('ccode').value = array.ccode;
            document.getElementById('mnumber').value = array.mobileno;
            // var pswrd=document.getElementById('pswrd').value;
            // var cpswrd=document.getElementById('cpswrd').value;
            var straddr = document.getElementById('straddr').value = array.street;
            var city = document.getElementById('city').value = array.city;
            var state = document.getElementById('state').value = array.state;
            var country = document.getElementById('country').value = array.country;
            var zipcode = document.getElementById('zipcode').value = array.zipcode;
            // alert(first)
            // alert(last)
            // alert(bday)
            // alert(nationality)
            // alert(gender)
            // alert(pnumber)
            // alert(expdate)
            // alert(email)
            // alert(ccode)
            // alert(mnumber)
            // alert(straddr)
            // alert(city)
            // alert(country)
            // alert(zipcode)
            // window.location.href="flightDetailForm.php"
            // xhttp = new XMLHttpRequest(); // Obect of xmlhttp request
            // xhttp.onreadystatechange = function()
            // {
            // if (xhttp.readyState == 4 && xhttp.status == 200)
            //     { // Check the status - if everything goes fine
            //     alert(xhttp.response)
            //     // if (output === 'User Already exist please login')
            //     // {
            //     //  window.location.href="login.php"
            //     // } 
            //     // window.location.href="login.php"// display the content (response) from the serverside page
            //     window.location.href="flightDetailForm.php"
            //     }
            // }

            // xhttp.open("POST", "db2.php", true); // this is the url
            // parameters = "email= "+email+"&bday="+bday+"&nationality="+nationality+"&gender="+gender+"&pnumber="+pnumber+"&expdate="+expdate+"&ccode="+ccode+"&mnumber="+mnumber+"&straddr="+straddr+"&city="+city+"&state="+state+"&country="+country+"&zipcode="+zipcode+"&first="+first+ "&last="+last;
            // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            // xhttp.send(parameters);
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

<body style="background-color:grey;" onload="change();">
    <!-- Header -->
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid ">
                    <div class="raw w-100 d-flex justify-content-between">
                        <div class="col">
                            <a class="navbar-brand" href="#">SAME INSURANCE</a>
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

    <div class="row g-3 pt-2 d-flex justify-content-center">
        <div class="col-8">
            <form method="POST" class="form_light_detail" id="form" enctype="multipart/form-data">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-12 text_white fw-bolder">
                            <h1>Passenger Detail</h1>
                        </div>

                        <label class="form-label text_white" for="flight_id"></label>
                        <div class="row">
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

                        </div>
                        <div class="row">
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

                        </div>
                        <div class="row">
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
                        </div>
                        <div class='row'>
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
                        </div>
                        <div class="row">
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
                        </div>


                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <!-- Submit button -->
                        <button type="button" class="btn-secondary mt-4 mb-4" style="display: block" onclick='next();'>Save</button>
                        <button type="button" class="btn-secondary mt-4 mb-4" style="display: none" onclick='change();'>Submit</button>
                    </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div></div>
</body>

</html>