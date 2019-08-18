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

$hospital = $_POST["Clinic"];
$regcntry = $_POST["RegistrationCountry"];
$regno = $_POST["RegistrationNo"];

$interest = $_POST["Interest"];

$caraward = $_POST["Awards"];
$achiev = $_POST["Accomplishments"];
$pic = $_FILES['doctorImageUpload']['name'];

$uploaddir = 'doctorpic/';
$uploadfile = $uploaddir . basename($_FILES['doctorImageUpload']['name']);

if ($password != $passwordcnf) {
    echo '<script>alert("Incorrect Password Confirmation.!")</script> ';
} else {
    if (!(move_uploaded_file($_FILES['doctorImageUpload']['tmp_name'], $uploadfile))) {
        echo '<script>

					alert("Upload Failure");
window.location="index.php";
				</script>
				';
    } else {

        $sql = "INSERT INTO `doctorregistration`(`name`, `gender`, `db`, `email`, `contactno`, `add`,`password`, `scrtq`, `scrtanswer`, `pin`, `city`, `state`, `cntry`,`kadha`, `hospital`, `regcntry`,`regno`,`spclintra`, `caraward`, `carachive`, `pic`) VALUES ('$fullname','$gend','$db','$email','$mobile','$address','$password','$scrtquestion','$scrtanswer','$postcode','$postcity','$state','$cntry','$kadha','$hospital','$regcntry','$regno','$interest','$caraward','$achiev','$pic')";
        $conn->query($sql);
        echo '<script>alert("Congratulation....Account created succesfully...!")</script> ';
        echo '<script>window.location="index.php"</script>';
    }
    echo $sql;
}
