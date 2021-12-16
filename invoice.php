<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/sidebar.css">
    <link rel="stylesheet" href="Css/invoice.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function change()
        {
            window.location.href="paymentmethod.php"
        }
        function retrive()
          {
            var people = document.cookie;
            // alert(people);
            var total = people.split(';')[0];
            var insurance = people.split(';')[1];
            total = total.split('=')[1];
            insurance = insurance.split('=')[1];
            // alert(insurance);
            alert(total);                    //alert("hey")
            // alert(insurance);        //var uname = document.getElementById("uname").value;
                    var xhttp;
                    xhttp = new XMLHttpRequest(); // Obect of xmlhttp request
                    xhttp.onreadystatechange = function() {
                        if (xhttp.readyState == 4 && xhttp.status == 200) { // Check the status - if everything goes fine
                            //echo myarray.row;
                            alert(xhttp.response);                            // 
                            var myObj = JSON.parse(JSON.stringify(this.responseText));
                            var array=myObj.split('<br>');
                            // alert(array[0]);
                            var display= JSON.parse(array[0]);
                            // alert(display.name);

                            // document.getElementById("login_name").innerHTML=display.display;
                            // for (i = 0; i <array.length-1; i++) {
                              
                                var parser=JSON.parse(array[0]);
                            //     document.getElementById("view"+i).style.display = "block";
                            //     // alert("name"+i);
                            document.getElementById("cname").innerHTML =display.name;// display the content (response) from the serverside page
                            document.getElementById("contact").innerHTML =display.mobileno;// display the content (response) from the serverside page
                            document.getElementById("dob").innerHTML =display.dob;// display the content (response) from the serverside page
                            document.getElementById("email").innerHTML =display.email;// display the content (response) from the serverside page
                            document.getElementById("desc").innerHTML ="Description :"+display.description;// display the content (response) from the serverside page
                            document.getElementById("cost").innerHTML =display.cost;// display the content (response) from the serverside page
                            document.getElementById("passenger").innerHTML =display.total;// display the content (response) from the serverside page
                            document.getElementById("final").innerHTML =display.total*display.cost;// display the content (response) from the serverside page
                            document.getElementById("final2").innerHTML =display.total*display.cost;// display the content (response) from the serverside page
                            document.getElementById("fname").innerHTML =display.fname;// display the content (response) from the serverside page
                            document.getElementById("fdate").innerHTML =display.dtime;// display the content (response) from the serverside page
                            // document.getElementById("nationality"+i).innerHTML ="Nationality = "+parser.nationality;// display the content (response) from the serverside page
                            // document.getElementById("passport"+i).innerHTML ="passport no = "+parser.passport;// display the content (response) from the serverside page
                            // document.getElementById("mobile"+i).innerHTML ="mobile no = "+parser.mobileno;// display the content (response) from the serverside page
                            //     // document.getElementById(i+1).innerHTML= parser.subject;
                            // }

                        }
                    }
                    xhttp.open("POST", "retriveinvoice.php", true); // this is the url
                    parameters = "totalp="+total;
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send(parameters);
}
    </script>>
    <title>Invoice</title>

</head>

<body style="background-color:gray" onload="retrive();">
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
            <!-- <li>
                <a href="home.php">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>TimeLine
                </a>
            </li> -->
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-xs-center"><strong>Invoice</strong></h3>
                    </div>
                    <div class="card-block m-3">
                        <div class="text-xs-center">
                            <h4>Invoice for purchase #33221(Invoice ID)</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <div class="card height" style="min-height: 270px;">
                                    <div class="card-header">Customer</div>
                                    <div class="card-block p-3">
                                        <p id="cname"><strong >Name:</strong>&nbsp;XYZ</p>
                                        <p id="email"><strong>Email:</strong>&nbsp;xyz@gmail.com</p>
                                        <p id="dob"><strong>DOB:</strong>&nbsp;23/5/1999</p>
                                        <p id="contact" ><strong>Contact:</strong>&nbsp;1111 Army Navy Drive Arlington VA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card height" style="min-height: 270px;">
                                    <div class="card-header">Flight Detail</div>
                                    <div class="card-block p-3">
                                        <p id="fname"><strong>Flight Name:</strong>&nbsp;Air India</p>
                                        <p id="fdate"><strong>Departure Date:</strong>&nbsp;11/10/2022</p>
                                        <p id="pdate"><strong>Payment Due Date:</strong>&nbsp;11/10/2022</p>
                                        <!-- <p><strong>Detail:</strong>&nbsp;wer erthj werty werty wert wert.</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card height" style="min-height: 270px;">
                                    <div class="card-header">Insurance Detail</div>
                                    <div class="card-block p-3">
                                        <p><strong>Type:</strong>&nbsp;<?php echo $_SESSION['insurance'] ?></p>
                                      <strong>Description:</strong>&nbsp;  <p id="desc">1111 Army Navy Drive Arlington VA</p>
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
                                        <td class="text-xs-center"><strong>Insurance cost</strong></td>
                                        <td class="text-xs-center"><strong>Total Passenger</strong></td>
                                        <td class="text-xs-right"><strong>Total Cost</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $_SESSION['insurance']; ?></td>
                                        <td class="text-xs-center" id="cost">12345</td>
                                        <td class="text-xs-center" id="passenger" >Samsung Galaxy S5 Extra Battery</td>
                                        <!-- <td class="text-xs-center" id="passenger" >Samsung Galaxy S5 Extra Battery</td> -->
                                        <td class="text-xs-right" id="final2">$1000.00</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="text-xs-center"></td>
                                        <td class="text-xs-center"><strong>Total</strong></td>
                                        <td class="text-xs-right" id="final"><strong>$1000.00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-12 d-flex justify-content-end">
                            <!-- Submit button -->
                            <button type="button" class=" btn btn-dark mt-4 mb-4" onclick="change();">Continue to Payment</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>