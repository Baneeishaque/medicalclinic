<?php

include 'connection.php';

$name = $_POST["Person"];

$email = $_POST["Email"];


$mobileno = $_POST["No"];



$message = $_POST["Message"];


$sql = "INSERT INTO `contact`(`mail`, `person`, `no`, `message`) VALUES ('$email','$name','$mobileno','$message')";
$conn->query($sql);
echo '<script>alert("Congratulation....Message Sended Successfully...!")</script> ';
echo '<script>window.location="../index.php"</script>';

echo $sql;

