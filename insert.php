
<?php
include 'connection.php';

?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A project file</title>
    <link rel="stylesheet" href="index.css">
 </head>
 <body>
   
  
 <div class="container">
   <header>
        <h1 font="Courier New">Unlock Your Future with BSC.IT at TechSpire College, New Baneshwor - Apply Now!</h1>
    </header>

 <form action="" method ="post">
<input type="number" name="id" id="id" placeholder="Enter your Symbol Num">

<input type="text" name="name" id="name" placeholder="Enter your Full Name">
<input type="text" name="age" id="age" placeholder="Enter your age">
<input type="text" name="gender" id ="gender" placeholder="Enter your gender">
<input type="email" name="email" id="email" placeholder="Enter your Email">
<input type="phone" name="phone" id="phone" placeholder="Enter your Number">
<input type="submit" name="submit" value="submit">
<button><a href="view.php">View</button>
</form>

<?php


if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

$s="INSERT INTO `data` (`id`, `name`, `age`, `gender`, `email`, `phone`) VALUES ('$id', '$name', '$age', '$gender', '$email', '$phone')";

$result=mysqli_query($con,$s);
if($result)
{
echo "success ";
}
else{
    echo "</br>";
    echo "failed". mysqli_error($con);
}
}
?>


</div>
</body>
</html>