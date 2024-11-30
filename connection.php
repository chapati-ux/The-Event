<<<<<<< HEAD
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
=======
<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event";
$con = mysqli_connect($servername, $username, $password, $dbname);
if($con){
    //echo"connection ok";
}
else{
    echo "connection fail". mysqli_connect_error();
>>>>>>> 602a7b9bda5d8afc289bc11e0c862c04552395d3
}
