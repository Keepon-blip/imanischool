<?php
require_once('logics/dbconnection.php');

$sqlBooking=mysqli_query($dbconnect,"SELECT * FROM bookings");
$countBooking=mysqli_num_rows($sqlBooking);
$sqlMessages=mysqli_query($dbconnect, "SELECT * FROM contact");
$countMessages=mysqli_num_rows($sqlMessages);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Saira+Condensed:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">    
    <title>Admin | Imani School of music</title>
</head>
<body>

    <div class="top-nav">
        <h3>Admin | Imani School Of Music</h3>
    </div>
    <div class="row">
        <div class="col-lg-2 side-nav" style="font-family: 'Saira Condensed', sans-serif;">
            <ul>
                <li><a href="admin.php">Home</a></li>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="contact.php">Messages</a></li>
                <li><a href="members.php">Bookings</a></li>
            </ul>
        </div>
        <div class="col-lg-10 bg-light">
            <div class="container mt-2">
            <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <h5>Bookings</h5>
                            </div>
                            <div class="card-body">
                                <div class="fa fa-pen fa-3x"></div>
                                <p class="badge text-bg-dark float-end"><?php echo $countMessages ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="card">
                            <div class="card-header bg-dark text-white">
                                <h5>Messages</h5>
                            </div>
                            <div class="card-body">
                                <div class="fa fa-folder-open fa-3x"></div>
                                <p class="badge text-bg-dark float-end"><?php echo $countBooking ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="card">
                            <div class="card-header bg-dark text-white">
                                <h5>Members</h5>
                            </div>
                            <div class="card-body">
                                <div class="fa fa-group fa-3x"></div>
                                <p class="badge text-bg-dark float-end">00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/3ae508335b.js" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>