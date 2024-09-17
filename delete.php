<?php
include 'connection.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $quer="delete from `data` where id=$id";
   $result=mysqli_query($con,$quer);
    $con->query($quer);
}
header('location:view.php')

?>