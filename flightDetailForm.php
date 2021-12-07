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
<body style="background-color:grey;">
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

    <div class="row g-3 d-flex justify-content-center">
        <div class="col-8">
            <form action="UploadFlightDetail.php" method="POST" class="form_light_detail" id="form" enctype="multipart/form-data">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-12 text_white fw-bolder">
                            <h1>Flight Detail</h1>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <label class="form-label text_white" for="airline_name">Select Airline</label>
                                <!-- <input type="text" id="airline_name" name="airline_name" class="form-control" /> -->
                                <select class="form-control" id="airline_name" name="airline_name" >
                                 <option  value="Option1">American Airlines</option> 
                                 <option  value="Option2">JetBlue Airways</option> 
                                 <option  value="Option3">US Airways</option> 
                                 <option  value="Option4">Delta Air Lines</option> 
                                 <option  value="Option5">United Airlines</option> 
                                 <option  value="Option6">Emirates</option> 
                                 <option  value="Option7">Qatar Airways</option> 
                                 <option  value="Option8">Air China</option> 
                                 <option  value="Option9">Cathay Pacific</option> 
                                 <option  value="Option10">China Airlines</option> 
                                 <option  value="Option11">China Southern Airlines</option> 
                                 <option  value="Option12">British Airways</option> 
                                 <option  value="Option13">Lufthansa</option> 
                                 <option  value="Option14">Swiss</option> 
                                 <option  value="Option15">Korean Air</option> 
                                 <option  value="Option16">Air Canada</option> 
                                 <option  value="Option17">Air India</option> 
                                 <option  value="Option18">Jet Airways</option> 
                                 <option  value="Option19">Singapore Airlines</option> 
                             </select>
                         </div>
                     </div>

                     <div class="col-6">
                        <label class="form-label text_white" for="flight_id">Special Assistances</label>

                  </div>
                   <div class="col-6">
                        <label class="form-label text_white" for="flight_id">Special Assistances</label>

                  </div>
                  <div class="col-6">
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Default checkbox
                          </label>
                      </div>
                  </div>
                  <div class="col-6">
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Default checkbox
                          </label>
                      </div>
                  </div>
                <div class="col-6">
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Default checkbox
                          </label>
                      </div>
                  </div>
                  <div class="col-6">
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Default checkbox
                          </label>
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
<!-- Footer -->
<div></div>
</body>
</html>