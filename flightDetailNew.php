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
            }
        });
    </script>
    <script>
        function change() {

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

<body style="background-color:gray;">
    <!-- Header -->
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="box-shadow: inset 0 0 10px #000000;">
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
        <div class="row p-4">
            <div class="col-12">
                <form action="invoice.php" method="POST" class="form_light_detail" id="form" enctype="multipart/form-data">
                    <div class="container p-4">
                        <div class="row g-3">
                            <div class="col-12 text_white fw-bolder">
                                <h1>Flight Detail</h1>
                            </div>
                            <div class="col-8">
                                <div class="form-outline">
                                    <label class="form-label text_white" for="airline_name">Select Airline</label>
                                    <!-- <input type="text" id="airline_name" name="airline_name" class="form-control" /> -->
                                    <select class="form-control" id="airline_name" name="airline_name">
                                        <option value="Option1">American Airlines</option>
                                        <option value="Option2">JetBlue Airways</option>
                                        <option value="Option3">US Airways</option>
                                        <option value="Option4">Delta Air Lines</option>
                                        <option value="Option5">United Airlines</option>
                                        <option value="Option6">Emirates</option>
                                        <option value="Option7">Qatar Airways</option>
                                        <option value="Option8">Air China</option>
                                        <option value="Option9">Cathay Pacific</option>
                                        <option value="Option10">China Airlines</option>
                                        <option value="Option11">China Southern Airlines</option>
                                        <option value="Option12">British Airways</option>
                                        <option value="Option13">Lufthansa</option>
                                        <option value="Option14">Swiss</option>
                                        <option value="Option15">Korean Air</option>
                                        <option value="Option16">Air Canada</option>
                                        <option value="Option17">Air India</option>
                                        <option value="Option18">Jet Airways</option>
                                        <option value="Option19">Singapore Airlines</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-outline" style="margin-top:0px">
                                    <label class="form-label text_white" for="flight_type">No of Flights </label>
                                    <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                                    <input type="Number" id="from_place" name="from_place" class="form-control" onchange='numbers();' />
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-outline" style="margin-top:20px">
                                    <label class="form-label text_white" for="flight_type">Departure Airport Code</label>
                                    <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                                    <input type="Text" id="from_place" name="from_place" class="form-control" />
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-outline" style="margin-top:20px">
                                    <label class="form-label text_white" for="flight_type">Departure Time</label>
                                    <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                                    <input type="Date" id="from_place" name="from_place" class="form-control" />
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-outline" style="margin-top:20px">
                                    <label class="form-label text_white" for="flight_type">Arrival Airport Code</label>
                                    <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                                    <input type="Text" id="from_place" name="from_place" class="form-control" />
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-outline" style="margin-top:20px">
                                    <label class="form-label text_white" for="flight_type">Arrival Time</label>
                                    <!-- <input type="text" id="class_type" name="class_type" class="form-control" /> -->
                                    <input type="date" id="from_place" name="from_place" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 mt-4">
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
                                                <select class="form-control" id="" name="airline_name">
                                                    <option value="Option1">Indian Vegetarian Meal (AVML)</option>
                                                    <option value="Option2">Non-vegetarian Hindu Meal (HNML)</option>
                                                    <option value="Option2">Vegetarian Jain Meal (VJML)</option>
                                                    <option value="Option2">Kosher Meal (KSML)</option>
                                                    <option value="Option2">Bland Meal (BLML)</option>
                                                    <option value="Option2">Diabetic Meal (DBML)</option>
                                                    <option value="Option2">Gluten‑Friendly Meal (GFML)</option>
                                                    <option value="Option2">Low‑Fat Meal (LFML)</option>
                                                    <option value="Option2">Low‑Salt Meal (LSML)</option>
                                                    <option value="Option2">Vegan Meal (VGML)</option>
                                                    <option value="Option2">Child Meal (CHML)</option>
                                                    <option value="Option2">Baby Meal (BBML)</option>
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
                                            <select class="form-control" id="" name="airline_name">
                                                <option value="Option1"> Economy Class</option>
                                                <option value="Option2">Economy Plus Class</option>
                                                <option value="Option2">Business Class</option>
                                                <option value="Option2">First Class</option>
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
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div></div>
</body>

</html>