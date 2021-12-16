<?php
session_start();
$_SESSION["passengerno"] = 1;
?>
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

    <title>Flight Detail</title>
</head>

<body style="background-color:gray;">
    <!-- Header -->
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="box-shadow: inset 0 0 10px #000000;  z-index: 50;top: 0;position: fixed;width: 100%;height: 60px;">
                <div class="container-fluid ">
                    <div class="raw w-100 d-flex justify-content-between">
                        <div class="col">
                            <a class="navbar-brand" href="#">ADMIN</a>
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
                                        <a class="nav-link menulink" href="login.php">LogOut</a>
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
                <a href="adminflight.php">
                     <i class="fa fa-plane" aria-hidden="true"></i>Flight Details
                </a>
            </li>
            <li>
                <a href="adminpassenger.php">
                   <i class="fa fa-user-o" aria-hidden="true"></i>Passenger Details
                </a>
            </li>
            <li>
                <a href="admincustomer.php">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>Customer Detail
                    <!-- <i class="fa fa-file-text" aria-hidden="true"></i>Insurance
                    <i class="fa fa-file" aria-hidden="true"></i>Insurance
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>Insurance -->
                </a>
            </li>
        </ul>
    </div>
    <!-- Body -->
    <div class="content-container">
        <!-- Content -->
        <div class="row p-5">
             <?php
                            include 'Connection.php';
                            $result = $conn->query("SELECT * FROM `kjana_psngr` ORDER BY passenger_id ;") or die($conn->error);
                            ?>
                           <!--  <div class="row"> -->
                                        <table class="table table-hover">
                                          <thead>
                                            <tr>
                                              <th scope="col">PassengerName</th>
                                              <th scope="col">Email</th>
                                              <th scope="col">DOB</th>
                                              <th scope="col">Nationality</th>
                                              <th scope="col">PassNo</th>
                                              <th scope="col">Mobile no</th>
                                              <th scope="col">Street</th>
                                              <th scope="col">City</th>
                                              <th scope="col">state</th>
                                              <th scope="col">Country</th>
                                              <th scope="col">Action</th>
                                              <th scope="col">Delte Action</th>
                                            </tr>
                                          </thead>

                                    <tbody>
                                    <?php
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr class="table-active">
                                          <td scope="row"><?php echo $row['first_name']." ".$row["last_name"] ;?></td>
                                          <td><?php echo $row['email']; ?></td>
                                          <td><?php echo $row['dob']; ?></td>
                                          <td><?php echo $row['nationality']; ?></td>
                                          <td><?php echo $row['pass_no']; ?></td>
                                          <td><?php echo $row['mobile_no'] ;?></td>
                                          <td><?php echo $row['street']; ?></td>
                                          <td><?php echo $row['city']; ?></td>
                                          <td><?php echo $row['state']; ?></td>
                                          <td><?php echo $row['country']; ?></td>
                                          <td> <a href="adminuseredit.php?ID=<?php echo $row['passenger_id']; ?>" style="background:#050567;border:1px solid #050567" type="submit" class="btns" name="submit" role="button">UPDATE</a></td>
                                          <td><a href="adminuserdelete.php?ID=<?php echo $row['passenger_id']; ?>" style="background:#ad1414;border:1px solid #ad1414" type="submit" class="btns" name="submit" role="button">DELETE</a></td>
                                          <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->
                                        </tr>
                                       <!--  <div class="row text-center" style="padding-left:15px;margin-bottom:20px">

                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-4" style="height:100px"> -->
                                                <!-- <div class="row" style="height:50px">
                                                    <a href="Update.php?ID=<?php echo $row['ID']; ?>" style="background:#050567;border:1px solid #050567" type="submit" class="btns" name="submit" role="button">UPDATE</a>

                                                    <a href="Delete.php?ID=<?php echo $row['ID']; ?>" style="background:#ad1414;border:1px solid #ad1414" type="submit" class="btns" name="submit" role="button">DELETE</a>
                                                </div>
                                                <div class="row">
                                                    <a href="Download.php?ID=<?php echo $row['ID']; ?>" style="background:green;border:1px solid green" type="submit" class="btns" name="submit" role="button">DOWNLOAD</a>

                                                    <a href="mail.php?ID=<?php echo $row['ID']; ?>" style="background:#c5c5c5;border:1px solid #c5c5c5" type="submit" class="btns" name="submit" role="button">MAIL</a> -->
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                    <?php } ?>
                                </tbody>
                                </table>
                                <button type="button" class="btn btn-dark" onclick="window.location.href='admininsertp.php'">Add user</button>
                            </div>
        </div>
    </div>
</body>

</html>