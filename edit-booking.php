<?php
$message='';
require_once('logics/dbconnection.php');

$queryBooking=mysqli_query($dbconnect, "SELECT * FROM bookings WHERE id='".$_GET['id']."' ");
while($fetchBooker=mysqli_fetch_array($queryBooking))
{
    $id=$fetchBooker['id'];
    $name=$fetchBooker['name'];
    $phonenumber=$fetchBooker['phonenumber'];
    $email=$fetchBooker['email'];
    $age=$fetchBooker['age'];
    $lesson=$fetchBooker['lesson'];
    $date=$fetchBooker['date'];
}
require_once('logics/process-update.php');
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
            <div class="container mt-3">
            <div class="card shadow rounded bg-light" style="font-family: 'Saira Condensed', sans-serif;">
                        <div class="card-header text-center bg-dark text-white">
                            <a href="members.php"><button class="btn btn-secondary float-start"><i class="fa fa-arrow-left float-start"></i></button></a>
                            <h4>Edit Student <?php echo $name ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="container">
                            <form class="form" action="edit-booking.php?id=<?php echo $id ?>" method="POST">
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" placeholder="Full Name" name="name" value="<?php echo $name ?>">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="tel" class="form-control" placeholder="Phone Number" name="phonenumber" value="<?php echo $phonenumber ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" placeholder="E-mail Address" name="email" value="<?php echo $email ?>">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control" placeholder="Age" name="age" value="<?php echo $age ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <select class="form-select" aria-label="Select Instrument" name="lesson" value="<?php echo $lesson ?>">
                                                <option selected>Drum Lessons</option>
                                                <option>DJ Lessons</option>
                                                <option>Saxophone Lessons</option>
                                                <option>Guitar Lessons</option>
                                                <option>Music Lessons</option>
                                                <option>Piano Lessons</option>
                                                <option>Vocal Lessons</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="date" name="date" value="<?php echo $date ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <?php echo $message ?>
                                    <button type="submit" class="btn btn-primary text-dark" name="updateBooking" style="background-color: #FFC64C;">Submit</button>
                                </div>
                            </form>
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