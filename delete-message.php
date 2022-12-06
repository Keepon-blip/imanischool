<?php
require_once('logics/dbconnection.php');

$sqlDelCon=mysqli_query($dbconnect, "DELETE FROM contact WHERE id='".$_GET['id']."' ");

if($sqlDelCon)
{
    header('location:contact.php');
}
else{
    echo "Error occurred!";
}

?>