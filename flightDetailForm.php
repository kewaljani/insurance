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

    <script>
      $("#form").validate({
        rules: {
          flight_id: {
            required: true                        
          },
          airline_name: {
            required: true
          },
          flight_type: {
            required: true
          },
          class_type: {
            required: true                        
          },
          from_place: {
            required: true                        
          },
          to_place: {
            required: true                        
          },
          d_date: {
            required: true                        
          },
          no_of_seats: {
            required: true                        
          }
        })
      }); 
    </script>
    <style>
        label{
          color:white
        }
        .error {
            color: red;
        }
        .bgroudcolor {
            background: linear-gradient(to right, #000000, #636c6d);
        }
        .upload-btn{
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
                                        <a class="nav-link" href="#">LogOut</a>
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
    <div class="body_section">
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-8">
                <form action="UploadFlightDetail.php" method="POST" class="form_light_detail" id="form" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-12 text_white fw-bolder">
                                <h1>Flight Detail</h1>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label text_white" for="flight_id">Flight Id</label>
                                    <input type="text" id="flight_id" name="flight_id" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label text_white" for="airline_name">Select Airline</label>
                                    <!-- <input type="text" id="airline_name" name="airline_name" class="form-control" /> -->
                                    <select class="form-control" id="airline_name" name="airline_name" >
                                        <option  value="Air India">Air India</option>
                                        <option  value="Option1">Option1</option> 
                                        <option  value="Option2">Option2</option> 
                                        <option  value="Option3">Option3</option> 
                                        <option  value="Option4">Option4</option> 
                                        <option  value="Option5">Option5</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label text_white" for="flight_type">Flight Type</label>
                                    <!-- <input type="text" id="flight_type" name="flight_type" class="form-control" /> -->
                                    <select class="form-control" id="flight_type" name="flight_type" >
                                        <option  value="Option1">Option1</option> 
                                        <option  value="Option2">Option2</option> 
                                        <option  value="Option3">Option3</option> 
                                        <option  value="Option4">Option4</option> 
                                        <option  value="Option5">Option5</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label text_white" for="class_type">Travel Class</label>
                                    <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                                    <select class="form-control" id="class_type" name="class_type" >
                                        <option value="eco">Economy</option>
                                        <option value="preeco">Premium Economy</option>
                                        <option value="bclass">Business Class</option>
                                        <option value="fclass">First Class</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label text_white" for="from_place">Departure</label>
                                    <input type="text" id="from_place" name="from_place" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline text_white">
                                    <label class="form-label" for="to_place">Destination</label>
                                    <input type="text" id="to_place" name="to_place" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline text_white">
                                    <label class="form-label" for="d_date">Departure Date</label>
                                    <input type="Date" id="d_date" name="d_date" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline text_white">
                                    <label class="form-label" for="no_of_seats">Seats</label>
                                    <input type="text" id="no_of_seats" name="no_of_seats" class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <!-- Submit button -->
                                <button type="submit" class="btn-secondary mt-4 mb-4">Submit</button>
                            </div>
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