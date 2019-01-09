<?php 
session_start();
include '../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin1" || $password == "admin1")
{
    header("location: ../page/benar.php"); 
}
else
{
    header("location: ../page/salah.php");
}

?>