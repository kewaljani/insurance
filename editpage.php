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
            function deletes(x){
                var pid = document.getElementById("pid"+x).innerHTML; 
                alert(pid);
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
                                window.location.href="editpage.php";
                            }
                        } 
                    xhttp.open("POST", "deleteuser.php", true); // this is the url
                    parameters = "pid= "+pid;
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send(parameters);
            }
            function update(x)
            {
                var pid = document.getElementById("pid"+x).innerHTML; 
                alert(pid);
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
                                window.location.href="finalupdate.php";
                            }
                        } 
                    xhttp.open("POST", "updatemessages.php", true); // this is the url
                    parameters = "pid= "+pid;
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send(parameters);
                }
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
                            // alert(array)

                            var display= JSON.parse(array[0]);
                            // alert(display.pid);

                            // document.getElementById("login_name").innerHTML=display.display;
                            for (i = 0; i <array.length-1; i++) {
                              
                                var parser=JSON.parse(array[i]);
                                document.getElementById("view"+i).style.display = "block";
                                // alert("name"+i);
                            document.getElementById("pid"+i).innerHTML =parser.pid;// display the content (response) from the serverside page
                            document.getElementById("name"+i).innerHTML ="Name = "+parser.fname;// display the content (response) from the serverside page
                            document.getElementById("dob"+i).innerHTML ="DOB = "+parser.dob;// display the content (response) from the serverside page
                            document.getElementById("email"+i).innerHTML ="EMAIL = "+parser.email;// display the content (response) from the serverside page
                            document.getElementById("nationality"+i).innerHTML ="Nationality = "+parser.nationality;// display the content (response) from the serverside page
                            document.getElementById("passport"+i).innerHTML ="passport no = "+parser.passport;// display the content (response) from the serverside page
                            document.getElementById("mobile"+i).innerHTML ="mobile no = "+parser.mobileno;// display the content (response) from the serverside page
                                // document.getElementById(i+1).innerHTML= parser.subject;
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
    <!-- <div class="container"> -->
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
                        <div class="card col-sm-12" id="view0" style="display:none">
                    <div class="col-sm-12">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div style="display:none"><h6 id="pid0"></h6></div>
                                    <div ><h6 id="name0">passenger Name</h6></div>
   
                                </div>
                            </div>
                           
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6"><h6 id="dob0">Dob:</h6></div>
                                    <div class="col-sm-6"><h6 id="passport0">Passport Details:</h6></div>  
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><h6 id="email0">Email: </h6></div>
                                    <div class="col-sm-6"><h6 id="nationality0">Nationality  : </h6></div>   
                                </div>
                                <div class="row"><div class="col-sm-12"><h6  id="mobile0">Mobile No</h6></div></div>
                                <p class="card-text">
                                </p>
                                <div class="row">
                                 <div  class=" col-sm-6 card-body">
                                <button onclick="update(0);" class="btn btn-secondary">Update Detail</a>
                            </div>
                             <div  class=" col-sm-6 card-body">
                                <button onclick="deletes(0); "class="btn btn-danger">Delete User</a>
                            </div>
                            </div>
                            </div>
                        </div> 
                        </div> 
                        <!-- card2 -->
                         <div class="card col-sm-12 mt-2" id="view1" style="display:none">
                    <div class="col-sm-12">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div style="display:none"><h6 id="pid1"></h6></div>
                                    <div ><h6 id="name1">passenger Name</h6></div>
   
                                </div>
                            </div>
                           
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6"><h6 id="dob1">Dob:</h6></div>
                                    <div class="col-sm-6"><h6 id="passport1">Passport Details:</h6></div>  
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><h6 id="email1">Email: </h6></div>
                                    <div class="col-sm-6"><h6 id="nationality1">Nationality  : </h6></div>   
                                </div>
                                <div class="row"><div class="col-sm-12"><h6  id="mobile1">Mobile No</h6></div></div>
                                <p class="card-text">
                                </p>
                                 <div class="row">
                                 <div  class=" col-sm-6 card-body">
                                <button onclick="update(1);" class="btn btn-secondary">Update Detail</a>
                            </div>
                             <div  class=" col-sm-6 card-body">
                                <button onclick="deletes(1); "class="btn btn-danger">Delete User</a>
                            </div>
                            </div>
                            </div>
                        </div> 
                        </div> 
                        <!-- Card 3 -->
                         <div class="card col-sm-12 mt-2" id="view2" style="display:none"> 
                    <div class="col-sm-12">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div style="display:none"><h6 id="pid2"></h6></div>
                                    <div ><h6 id="name2">passenger Name</h6></div>
   
                                </div>
                            </div>
                           
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6"><h6 id="dob2">Dob:</h6></div>
                                    <div class="col-sm-6"><h6 id="passport2">Passport Details:</h6></div>  
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><h6 id="email2">Email: </h6></div>
                                    <div class="col-sm-6"><h6 id="nationality2">Nationality  : </h6></div>   
                                </div>
                                <div class="row"><div class="col-sm-12"><h6  id="mobile2">Mobile No</h6></div></div>
                                <p class="card-text">
                                </p>
                                 <div class="row">
                                 <div  class=" col-sm-6 card-body">
                                    <button onclick="update(2);" class="btn btn-secondary">Update Detail</a>
                                </div>
                                <div  class=" col-sm-6 card-body">
                                    <button onclick="deletes(2); "class="btn btn-danger">Delete User</a>
                                </div>
                                </div>
                            </div>
                        </div> 
                        </div> 
                         <!-- Card 2 -->
                         <div class="card col-sm-12 mt-2" id="view3" style="display:none">
                    <div class="col-sm-12">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div style="display:none"><h6 id="pid3"></h6></div>
                                    <div ><h6 id="name3">passenger Name</h6></div>
   
                                </div>
                            </div>
                           
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6"><h6 id="dob3">Dob:</h6></div>
                                    <div class="col-sm-6"><h6 id="passport3">Passport Details:</h6></div>  
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><h6 id="email3">Email: </h6></div>
                                    <div class="col-sm-6"><h6 id="nationality3">Nationality  : </h6></div>   
                                </div>
                                <div class="row"><div class="col-sm-12"><h6  id="mobile3">Mobile No</h6></div></div>
                                <p class="card-text">
                                </p>
                                  <div class="row">
                                 <div  class=" col-sm-6 card-body">
                                    <button onclick="update(3);" class="btn btn-secondary">Update Detail</a>
                                </div>
                                <div  class=" col-sm-6 card-body">
                                    <button onclick="deletes(3); "class="btn btn-danger">Delete User</a>
                                </div>
                                </div>
                           
                            </div>
                        </div> 
                        </div> 
                    <!-- Card 2 -->
                         <div class="card col-sm-12 mt-2" id="view4" style="display:none">
                    <div class="col-sm-12">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div style="display:none"><h6 id="pid4"></h6></div>
                                    <div ><h6 id="name4">passenger Name</h6></div>
   
                                </div>
                            </div>
                           
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6"><h6 id="dob4">Dob:</h6></div>
                                    <div class="col-sm-6"><h6 id="passport4">Passport Details:</h6></div>  
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><h6 id="email4">Email: </h6></div>
                                    <div class="col-sm-6"><h6 id="nationality4">Nationality  : </h6></div>   
                                </div>
                                <div class="row"><div class="col-sm-12"><h6  id="mobile4">Mobile No</h6></div></div>
                                <p class="card-text">
                                </p>
                                 <div class="row">
                                 <div  class=" col-sm-6 card-body">
                                    <button onclick="update(4);" class="btn btn-secondary">Update Detail</a>
                                </div>
                                <div  class=" col-sm-6 card-body">
                                    <button onclick="deletes(4); "class="btn btn-danger">Delete User</a>
                                </div>
                                </div>
                           
                            </div>
                        </div> 
                        </div> 
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn-secondary mt-4 mb-4" style="display: block" onclick='window.location.href="flightDetailForm.php"'>Next</button>
                        </div>
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
                                    <div class="col-sm-6"><h6 >Departure Date: 23/5/2422</h6></div>
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
</body>
</html>