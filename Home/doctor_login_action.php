<?php

include 'connection.php';


$email = $_POST["UserName"];


$password = $_POST["Password"];

$sql = "SELECT *
    FROM doctorregistration
    WHERE email = '$email' AND password='$password';";
$result = $conn->query($sql);
echo mysqli_num_rows($result);
if (mysqli_num_rows($result) == 0) {
    echo '<script>alert("Invalid Account Credentials...!")</script> ';
    echo '<script>window.location="doctors.php"</script>';
} else {
    echo '<script>alert("Congratulation....")</script> ';
    session_start();
    $_SESSION["user_id"] = $email;
    header("Location: chat_d.php"); /* Redirect browser */
    exit();

    //echo '<script>window.location="doctorregistration.php"</script>';
}


echo $sql;
?>