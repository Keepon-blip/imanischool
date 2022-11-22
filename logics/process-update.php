<?php
require_once("logics/dbconnection.php");

if( isset($_POST['updateBooking']) )
{
    $name=$_POST['name'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $lesson=$_POST['lesson'];
    $date=$_POST['date'];

    $updateRecord=mysqli_query($dbconnect, "UPDATE bookings SET name='$name', phonenumber='$phonenumber', email='$email', age='$age', lesson='$lesson', date='$date' WHERE id='".$_GET['id']."' ");

    if($updateRecord)
    {
        $message="Records updates successfully!";
    }
    else
    {
        $message="Error occurres while updating user info.";
    }
}
?>