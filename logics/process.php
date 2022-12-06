<?php
require_once('logics/dbconnection.php');

if(isset($_POST['book_class']))
{
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $lesson = $_POST['lesson'];
    $date = $_POST['date'];

    $sql=mysqli_query($dbconnect, "INSERT INTO bookings(id,name,phonenumber,email,age,lesson,date)VALUES('','$name','$phonenumber','$email','$age','$lesson','$date')");
}
?>