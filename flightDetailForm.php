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

    <title>Flight Detail</title>
</head>
<body>
    <!-- Header -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid d-flex justify-content-between w-100">
                <div class="">
                    <a class="navbar-brand" href="#">Navbar</a>
                </div>
          
                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="flightDetailForm.php">Flights</a>
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
        </nav>
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