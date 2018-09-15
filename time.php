<?php


$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect("localhost","root","","portal");

if(mysqli_connect_errno()){

echo "Error".mysqli_connect_error();
}

$t = date('Y-m-d H:i:s');
$sql= "INSERT INTO time (now) VALUES(NOW())";
$query = mysqli_query($conn,$sql);
if($query)
{
echo "Date and Time are added";
}
?>
