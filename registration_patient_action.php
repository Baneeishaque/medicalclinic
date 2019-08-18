<?php

include 'connection.php';

$name = $_POST["Name"];
$tname = $_POST["Tname"];

$fullname = $tname . $name;

$gend = $_POST["Gender"];

$db = $_POST["Dob"];
$email = $_POST["Email"];

$code = $_POST["PhoneCode"];
$mobileno = $_POST["Mobile"];

$mobile = $code . $mobileno;

$address = $_POST["Address"];

$password = $_POST["Password"];
$passwordcnf = $_POST["ConfirmPassword"];

$scrtquestion = $_POST["SecretQuestion"];
$scrtanswer = $_POST["SecretAnswer"];

$postcode = $_POST["PostalCode"];
$postcity = $_POST["City"];

$state = $_POST["State"];
$cntry = $_POST["Country"];

$kadha = $_POST["Introduction"];


$pic = $_FILES['doctorImageUpload']['name'];

$uploaddir = 'patientpic/';
$uploadfile = $uploaddir . basename($_FILES['doctorImageUpload']['name']);



if (!(move_uploaded_file($_FILES['doctorImageUpload']['tmp_name'], $uploadfile))) {
    echo '<script>

					alert("Try Again, Reason : Image Upload Failure...");
window.location="registration_patient.php";
				</script>
				';
} else {

    $sql = "INSERT INTO `medicity`.`patient_registration`
(`name`,
`gender`,
`db`,
`email`,
`contactno`,
`add`,
`username`,
`password`,
`scrtq`,
`scrtanswer`,
`pin`,
`city`,
`state`,
`cntry`,
`kadha`,
`pic`)
VALUES
 ('$fullname','$gend','$db','$email','$mobile','$address','$password','$passwordcnf','$scrtquestion','$scrtanswer','$postcode','$postcity','$state','$cntry','$kadha','$pic')";
    $conn->query($sql);
    echo '<script>alert("Congratulation....Account created succesfully...!")</script> ';
    echo '<script>window.location="index.php"</script>';
}
echo $sql;

