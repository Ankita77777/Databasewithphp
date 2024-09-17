<?php
include 'connection.php';

error_reporting(0);




if(isset($_GET['id']))  
{
    $id=$_GET['id'];

}


$select="select * from `data` where `id`='$id'";
$dta=mysqli_query($con,$select);

if(!$dta)
{

die("query failed".mysqlI_error());

}
else{
    $row=mysqli_fetch_assoc($dta);
  
   
   
    }




?>


<?php

if(isset($_POST['Update']))
{
   if(isset($_GET['id_new'])){

      $idnew=$_GET['id_new'];

   }
   $namee=$_POST['name'];
   $agee=$_POST['age'];
   $gendr=$_POST['gender'];
   $emaill=$_POST['email'];
   $phonee=$_POST['phone'];
   $query="update `data` set `id`='$idnew' , `name`='$namee',`age`='$agee',`gender`='$gendr',`email`='$emaill',`phone`='phonee' where `id`='$id'";


if(!$query)
{

die("query failed".mysqlI_error());

}
else{
   header('location:view.php');
  
}}
   
    




?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A project file</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
 
 <div class="container">
 <form action="update.php?id_new=<? echo $id;?>" method ="post">
<input type="number" name="id" id="id"value="<?php echo $row['id'] ?> " >
<input value =" <?PHP echo $row['name']?> "type="text" name="name" id="name" value="<?php echo $row['name'] ?> " >
<input type="text" name="age" id="age" value="<?php echo $row['age'] ?> ">
<input type="text" name="gender" id ="gender" value="<?php echo $row['gender'] ?> " >
<input type="email" name="email" id="email" value="<?php echo $row['email'] ?> " >
<input type="phone" name="phone" id="phone" value="<?php echo $row['phone'] ?> " >
<input type="submit" name="Update" value="Update"  >
<button><a href="view.php">Back</button>

</form>