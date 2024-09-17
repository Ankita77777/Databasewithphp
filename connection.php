<?php $host='localhost';
$username='root';
$password='';
$db='phpproject';


$con=mysqli_connect($host,$username,$password,$db);
if($con)
{

}
else{
    echo "databade is not connect". mysqli_error($con);
}
 ?>