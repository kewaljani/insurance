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
  function change()
  {
    
    var airline_name = document.getElementById('airline_name').value;
    var departure_AC = document.getElementById('departure_AC').value;
    var departure_time = document.getElementById('departure_time').value;
    var arrival_ac = document.getElementById('arrival_ac').value;
    var arrival_time = document.getElementById('arrival_time').value;
    var meal_plan = document.getElementById('meal_plan').value;
    var Cabin_Class = document.getElementById('Cabin_Class').value;
  
  }
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

    <div class="row g-3 d-flex justify-content-center body_section">
        <div class="col-8">
            <form action="invoice.php" method="POST" class="form_light_detail" id="form" enctype="multipart/form-data">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-12 text_white fw-bolder">
                            <h1>Flight Detail</h1>
                        </div>
                        <div class="col-8">
                            <div class="form-outline">
                                <label class="form-label text_white" for="airline_name">Select Airline</label>
                                <!-- <input type="text" id="airline_name" name="airline_name" class="form-control" /> -->
                                <select class="form-control" id="airline_name" name="airline_name" >
                                 <option  value="American Airlines">American Airlines</option> 
                                 <option  value="etBlue Airways">JetBlue Airways</option> 
                                 <option  value="US Airways">US Airways</option> 
                                 <option  value="elta Air Lines">Delta Air Lines</option> 
                                 <option  value="United Airlines">United Airlines</option> 
                                 <option  value="Emirates">Emirates</option> 
                                 <option  value="Qatar Airways">Qatar Airways</option> 
                                 <option  value="Air China">Air China</option> 
                                 <option  value="Cathay Pacific">Cathay Pacific</option> 
                                 <option  value="China Airlines">China Airlines</option> 
                                 <option  value="China Southern Airlines">China Southern Airlines</option> 
                                 <option  value="British Airways">British Airways</option> 
                                 <option  value="Lufthansa">Lufthansa</option> 
                                 <option  value="Swiss">Swiss</option> 
                                 <option  value="Korean Air">Korean Air</option> 
                                 <option  value="Air Canada">Air Canada</option> 
                                 <option  value="Air India">Air India</option> 
                                 <option  value="Jet Airways">Jet Airways</option> 
                                 <option  value="Singapore Airlines<">Singapore Airlines</option> 
                             </select>
                         </div>
                     </div>
                     <div class="col-4">
                        <div class="form-outline" style="margin-top:0px">
                            <label class="form-label text_white" for="flight_type">No of Flights </label>
                            <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                            <input type="Number" id="from_place" name="from_place" class="form-control" onchange='numbers();'/>
                        </div>
                    </div>

                    <!--  <div class="col-6">
                        <label class="form-label text_white" for="flight_id">Special Assistances</label>

                  </div>
                   <div class="col-6">
                        <label class="form-label text_white" for="flight_id">Special Assistances</label>

                  </div>
              -->
              <div class="row pl-3" >
              <div class="col-3">

                <div class="form-outline" style="margin-top:20px">
                    <label class="form-label text_white" for="flight_type">Departure Airport Code</label>
                    <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                    <input type="Text" id="departure_AC" name="from_place" class="form-control" />
                </div>
            </div> <div class="col-3">

                <div class="form-outline" style="margin-top:20px">
                    <label class="form-label text_white" for="flight_type">Departure Time</label>
                    <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                    <input type="Date" id="departure_time" name="from_place" class="form-control" />
                </div>
            </div> <div class="col-3">

                <div class="form-outline" style="margin-top:20px">
                    <label class="form-label text_white" for="flight_type">Arrival Airport Code</label>
                    <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                    <input type="Text" id="arrival_ac" name="from_place" class="form-control" />
                </div>
            </div>
            <div class="col-3">

                <div class="form-outline" style="margin-top:20px">
                    <label class="form-label text_white" for="flight_type">Arrival Time</label>
                    <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                    <input type="date" id="arrival_time" name="from_place" class="form-control" />
                </div>
            </div>
          </div>
            <div class="col-6">

                <div class="row">
                    <div class="col-12 mt-4">
                                   <!--  <div class="form-check">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Default checkbox
                                      </label>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                              -->                               
                              <label class="form-label text_white" for="flight_id">Special Assistances</label>

                          </div>
                          <div class="col-12 mt-2">
                             <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                 Disability and Mobility Assistance
                              </label>
                          </div>
                      </div>
                      <div class="col-12 mt-2">
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Travelling with infants
                          </label>
                      </div>
                  </div>
                  <div class="col-12 mt-2">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Travelling with animals
                      </label>
                  </div>
              </div>
              <div class="col-12 mt-2">
                 <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Elderly passenger
                  </label>
              </div>
          </div>
      </div>
  </div>

  <div class="col-6 ">
    <div class="row">
        <div class="col-12">
            <div class="form-outline" style="margin-top:20px">
                <!-- <label class="form-label text_white" for="flight_type">Number of Stops in between</label> -->
                <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                <div class="form-outline">
                                <label class="form-label text_white" for="airline_name">Meal Plan</label>
                                   <select class="form-control" id="meal_plan" name="airline_name" >
                                 <option  value="AVML">Indian Vegetarian Meal (AVML)</option> 
                                 <option  value="HNML">Non-vegetarian Hindu Meal (HNML)</option> 
                                 <option  value="VJML">Vegetarian Jain Meal (VJML)</option> 
                                 <option  value="KSML">Kosher Meal (KSML)</option> 
                                 <option  value="BLML">Bland Meal (BLML)</option> 
                                 <option  value="DBML">Diabetic Meal (DBML)</option> 
                                 <option  value="GFML">Gluten‑Friendly Meal (GFML)</option> 
                                 <option  value="LFML">Low‑Fat Meal (LFML)</option> 
                                 <option  value="LSML">Low‑Salt Meal (LSML)</option> 
                                 <option  value="VGML">Vegan Meal (VGML)</option> 
                                 <option  value="CHML">Child Meal (CHML)</option> 
                                 <option  value="BBML">Baby Meal (BBML)</option> 
                               </select>
                  </div>
            </div>
        </div>
        <div class="col-12">
           <div class="form-outline" style="margin-top:20px">
            <!-- <label class="form-label text_white" for="flight_type">Number of Stops in between</label> -->
            <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
            <!-- <input type="date" id="from_place" name="from_place" class="form-control" onchange='numbers();'/> -->
             <label class="form-label text_white" for="airline_name">Cabin Class</label>
                                   <select class="form-control" id="Cabin_Class" name="airline_name" >
                                 <option  value="Economy Class"> Economy Class</option> 
                                 <option  value="Economy Plus Class">Economy Plus Class</option> 
                                 <option  value="Business Class">Business Class</option> 
                                 <option  value="First Class">First Class</option> 
                               </select>
                                
        </div>
       


    </div>
</div>
</div>
<!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
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