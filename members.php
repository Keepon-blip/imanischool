<?php
require_once('logics/dbconnection.php');

$sql=mysqli_query($dbconnect,"SELECT * FROM bookings");
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
                <li><a href="">Home</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Members</a></li>
                <li><a href="">Bookings</a></li>
            </ul>
        </div>
        <div class="col-lg-10 bg-light">
            <div class="container mt-2">
                <table class="table bg-dark text-white rounded">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>E-mail</th>
                            <th>Age</th>
                            <th>Instrument</th>
                            <th>Date</th>
                            <th>Booked On</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody style="font-family: 'Saira Condensed', sans-serif;">
                        <?php $count = 1; while($fetchBookings = mysqli_fetch_array($sql)) {?>
                        <tr>
                            <th><?php echo $count; ?></th>
                            <td><?php echo $fetchBookings['name']; ?></td>
                            <td><?php echo $fetchBookings['phonenumber']; ?></td>
                            <td><?php echo $fetchBookings['email']; ?></td>
                            <td><?php echo $fetchBookings['age']; ?></td>
                            <td><?php echo $fetchBookings['lesson']; ?></td>
                            <td><?php echo $fetchBookings['date']; ?></td>
                            <td><?php echo $fetchBookings['booked_on']; ?></td>
                            <td>
                                <a href="edit-booking.php?id=<?php echo $fetchBookings['id'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye text-white"></i></a>
                                <button style="background: none; border: none;" data-bs-toggle="modal" data-bs-target="#deleteModal"><a class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></button>
                            </td>
                        </tr>
                        <?php $count++; } ?>
                    </tbody>
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-danger" id="deleteModalLabel">Warning!</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h4>Are you sure you want to delete this person?</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="delete-booking.php?id=<?php echo $fetchBookings['id'] ?>" style="text-decoration: none; color: #fff;"><button type="button" class="btn btn-danger">Sure, Delete</button></a>
                            </div>
                            </div>
                        </div>
                        </div>
                </table>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/3ae508335b.js" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>