<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Css/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      function change()
      {
        window.location.href = "signup.php";
      }
  </script>
</head>
<body>
    <!-- Header -->
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid ">
                    <div class="raw w-100 d-flex justify-content-between">
                        <div class="col">
                            <a class="navbar-brand" href="#">Logo</a>
                        </div>
                        <div class="col">
                            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarColor02">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="signup.php">SignUp</a>
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
  <div class="bg-image"></div>

  <div class="bg-text">
    <form action="check.php" method="post">
      <p style="font-size:20px">Login Id:<br>
      <input class="space" size="40" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\S-\.]+)\.([a-zA-Z]{2,5})$" required title="improper email id" type="text" name="email">
      <br>
      Password:<br>
      <input class="space" type="password" name="pwrd"></p>
      <button type="submit" class="btn btn-secondary" >Sign In</button>
    </form>
	  <p style="font-size:20px;color:white" id="space">Register : <a href="#" style="color:lightgreen" onclick="change()">Create account</a></p>
  </div>

  </body>
</html>
