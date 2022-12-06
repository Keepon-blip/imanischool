<?php
require_once('logics/dbconnection.php');

$sqlMessage=mysqli_query($dbconnect,"SELECT * FROM contact");
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
                <table class="table table-dark table-hover rounded table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>E-mail</th>
                            <th>Phone number</th>
                            <th>Message</th>
                            <th>Sent On</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody style="font-family: 'Saira Condensed', sans-serif;">
                        <?php $count = 1; while($fetchRecords = mysqli_fetch_array($sqlMessage)) {?>
                        <tr>
                            <th><?php echo $count; ?></th>
                            <td><?php echo $fetchRecords['firstname']; ?></td>
                            <td><?php echo $fetchRecords['lastname']; ?></td>
                            <td><?php echo $fetchRecords['email']; ?></td>
                            <td><?php echo $fetchRecords['phonenumber']; ?></td>
                            <td class="d-inline-block text-truncate" style="max-width: 150px;"><?php echo $fetchRecords['message']; ?></td>
                            <td><?php echo $fetchRecords['sent_on']; ?></td>
                            <td>
                                <a href="view-contact.php?id=<?php echo $fetchRecords['id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-eye text-white"></i></a>
                                <a href="delete-message.php?id=<?php echo $fetchRecords['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash text-white"></i></a>
                            </td>
                        </tr>
                        <?php $count++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/3ae508335b.js" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>