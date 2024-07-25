<?php
$localhost="localhost";
$username="root";
$password="";
$dbname="database4";

$conn= new mysqli($localhost,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection error".$conn->connect_error);
}
?>
