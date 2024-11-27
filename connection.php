<?php 
error_reporting(0);
$servername ="localhost";
$username="root";
$password="";
$dbname="event";
$con= mysqli_connect($servername,$username,$password,$dbname);
if($con){
   // echo"connection ok";
}
else{
echo"connection Failed".mysqli_connect_error();
}
