<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
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
  <title>TimeLine</title>
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
	<div class='row' style="height: 500px">
		<div class='col-md-3'style="border:solid;">
			<div class="row">
				<div class="col">
					<div class="row pt-3">
						<p style="font-size:30px;"><img src="plus.svg" height="50px" width="50px" class="img" onclick="change('flight')" style="margin: 0 40px 0 40px" >Add Flight</p>
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
</body>
</html>