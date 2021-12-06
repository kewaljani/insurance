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
<style  type="text/css">
    .img
      {
      margin-right:40px
      }
    .img:hover
      {
      -ms-transform: scale(1.5); /* IE 9 */
      -webkit-transform: scale(1.5); /* Safari 3-8 */
      transform: scale(1.5);
      }
    </style>
    <script type="text/javascript">
    function change(x)
          {
          window.location.href=x+".php";
          }
  </script>
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
    
    <div class='row' style="height: 500px">
		<div class='col-md-3'style="border:solid;">

			<div class="row">
				<div class="col">
					
					<div class="row pt-3">
							<p style="font-size:30px;"><img src="plus.svg" height="50px" width="50px" class="img" onclick="change('flightDetailForm')" style="margin: 0 40px 0 40px" >Add Flight</p>
						</div>


				</div>
				
			</div>
			<div class="row">
				<div class="col">
					
					<div class="row pt-3">
							<p style="font-size:30px"><img src="cart.svg" height="50px" width="50px" class="img" onclick="change('insurance')"  style="margin: 0 40px 0 40px" >Add insurance</p>
						</div>
				</div>
				
			</div>
			
		</div>
		<div class='col-md-9'style="border:solid;">
			hello
			
		</div>
	</div>
    <!-- Footer -->
    <div class="w">

    </div>
</body>
</html>