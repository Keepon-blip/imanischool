<?php
require_once("logics/dbconnection.php");
$queryDelete=mysqli_query($dbconnect, "DELETE FROM bookings WHERE id='".$_GET['id']."'");

if($queryDelete)
{
    echo "User deletes successfully";
    header('location:members.php');
}
else
{
    echo "Error occurred";
}
?>