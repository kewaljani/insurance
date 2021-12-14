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
    function change() {
      window.location.href = "signup.php";
    }

    function login() {
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      var xhttp;
      //alert(first,pswrd,last,email,enrollment,cpswr);
      xhttp = new XMLHttpRequest(); // Obect of xmlhttp request
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) { // Check the status - if everything goes fine
          var output = xhttp.response
          if (output === 'Wrong user name or password') {
            alert('Wrong user name or password')
            window.location.href = "login.php"
          } else {
            window.location.href = "insurance.php" // display the content (response) from the serverside page

          }
        }
      }
      xhttp.open("POST", "check.php", true); // this is the url
      parameters = "email= " + email + "&pwrd=" + password;
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(parameters);
    }
  </script>
  <title>Log In</title>
</head>

<body>
  <!-- Header -->
  <div class="row">
    <div class="col">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid ">
          <div class="raw w-100 d-flex justify-content-between">
            <div class="col">
              <a class="navbar-brand" href="#">Same Insurance</a>
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
      <div class='row p-4'>
        <div class="col-sm-12 fw-bolder pb-3 mb-3" style="border-bottom: 4px solid black; color:white;">
          <h1>Log In</h1>
        </div>
        <div class='col-sm-12 pt-2'>
          <label class="form-label text_white" for="pwrd" style="color:white">Email Id</label>
        </div>
        <div class='col-sm-12'>
          <input id="email" type="email" name="email" style="width:100%">
        </div>
        <div class='col-sm-12 pt-2'>
          <label class="form-label text_white" for="pwrd" style="color:white">Password</label>
        </div>
        <div class='col-sm-12 '>
          <input type="password" id="password" name="pwrd" style="width:100%">
        </div>
        <div class='col-sm-12 py-4'>
          <button type="submit" class="btn btn-dark" onclick="login()">Sign up</button>
        </div>
        <div class='col-sm-12 pt-4 text_white fw-bolder pt-3 mt-3' style="color:white;border-top: 4px solid black; color:white;">
          First time user? <span onclick="change()" style="text-decoration: underline;cursor: pointer;">CREATE ACCOUNT</span>
        </div>
      </div>
    </form>

    <!-- <form action="check.php" method="post">
      <p style="font-size:20px">Login Id:<br>
        <input class="space" size="40" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\S-\.]+)\.([a-zA-Z]{2,5})$" required title="improper email id" id="email" type="text" name="email">
        <br>
        Password:<br>
        <input class="space" type="password" id="password" name="pwrd">
      </p>
      <button type="button" class="btn btn-secondary" onclick="login();">Sign In</button>
    </form> -->
    <!-- <p style="font-size:20px;color:white" id="space">Register : <a href="#" style="color:lightgreen" onclick="change()">Create account</a></p> -->
  </div>
</body>

</html>