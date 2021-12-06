<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    .bot{

            width:100%;
            height:87%;
            overflow: scroll;
      background-color:white;
            -ms-overflow-style: none;  /* Internet Explorer 10+ */
            scrollbar-width: none;  /* Firefox */
            }
        .bot::-webkit-scrollbar
      {
            display: none;  /* Safari and Chrome */
            }
    .rightcol
      {
       width:100%;
       height:80%;
      background-color:grey;
      }
      a {
      text-decoration: none;
          display: inline-block;
          padding: 8px 16px;
        }

        a:hover {
          background-color: #ddd;
          color: black;
        }

        .previous {
          background-color: #f1f1f1;
          color: black;
        }

        .next {
          background-color: #4CAF50;
          color: white;
        }

        .round {
          border-radius: 50%;
        }
  	
  	
  </style>
  <script type="text/javascript">
    function change(x)
          {
          window.location.href=x+".php";
          }
  </script>
</head>
<body style="background-color:lightgrey ">
	<div class="row">
		<div class="col" style="border:solid;">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
		</div>
		
	</div>
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
</body>
</html>