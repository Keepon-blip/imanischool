<?php
require_once('logics/dbconnection.php');

$sqlfetchContact=mysqli_query($dbconnect, "SELECT * FROM contact WHERE id='".$_GET['id']."' ");

while( $fetchContact=mysqli_fetch_array($sqlfetchContact) )
{
    $firstname=$fetchContact['firstname'];
    $lastname=$fetchContact['lastname'];
    $email=$fetchContact['email'];
    $phonenumber=$fetchContact['phonenumber'];
    $message=$fetchContact['message'];
    $sent_on=$fetchContact['sent_on'];
}

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
                <div class="card">
                    <div class="card-header">
                        <a href="contact.php"><button class="btn btn-secondary float-start me-3"><i class="fa fa-arrow-left float-start"></i></button></a>
                        <h4><?php echo $firstname ?>'s Info</h4>
                    </div>
                    <div class="card-body">
                        <li class="list-group-item fw-bolder">Full Name: </li>
                        <li class="list-group-item"><?php echo $firstname ?> <?php echo $lastname ?></li>
                        <li class="list-group-item fw-bolder">Email: </li>
                        <li class="list-group-item"><?php echo $email ?></li>
                        <li class="list-group-item fw-bolder">Phone Number: </li>
                        <li class="list-group-item"><?php echo $phonenumber ?></li>
                        <li class="list-group-item fw-bolder">Message: </li>
                        <li class="list-group-item"><?php echo $message ?></li>
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