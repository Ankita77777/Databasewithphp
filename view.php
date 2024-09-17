<?php 
include 'connection.php';
error_reporting(0);

?>

<?php
//SELECTING DATA FROM TABLE
$query="select * from data";
//EXECUTE QUERY
$dta=mysqli_query($con,$query);
$result=mysqli_num_rows($dta);

//CHECKING THERE IS ANY TABLES ARE THERE OR NOT
if($result){
?>
<link rel="stylesheet" href="index2.css">
<button class='add'><a href="insert.php">ADD USER</button>
<h1>Here are the details of the students who have applied.</h1>
<table border="1px" cellpadding="15px" cellspacing="0" >
<tr>
    <th>id </th>
    <th>Name</th>
    <th>Age</th>
    <th>gender</th>
    <th>email</th>
    <th>phone</th>
    <th colspan="2">Operations</th>
</tr>
<?php
//TO PRINT INSERT VALUE IN TABLE
  while($output = mysqli_fetch_assoc($dta))
  { echo "
    <tr>
    <th>".$output['id'].  "</th>
    <th>".$output['name'].  "</th>
    <th>".$output['age']. "</th>
    <th>".$output['gender'].  "</th>
    <th>".$output['email'].  "</th>
    <th>".$output['phone'].  "</th>
   <th> <button class='edit'><a href='update.php?id=$output[id] ' >Edit</a></button></th>
  <th> <button class='dlt'><a href='delete.php?id=$output[id] ' >Delete</button></th>
</tr> 

";
echo "</br>";
  }
}
else{
    echo "record doesnt find";
}

?>