<?php
$conn = new mysqli("localhost","root","","internship");

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
?>