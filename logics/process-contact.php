<?php
require_once('logics/dbconnection.php');

if(isset($_POST['sub_message']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $message=$_POST['message'];

    $sqlMessage=mysqli_query($dbconnect, "INSERT INTO contact(firstname,lastname,email,phonenumber,message)VALUES('$firstname','$lastname','$email','$phonenumber','$message')");
}
?>