<?php

session_start();
require_once('dbconnect.php');
error_reporting(0);
$receiver = $_GET["id"];
db_connect();
$uid = $_SESSION["user_id"];
echo $uid;
$sql = "SELECT * from chat_receiver where partner1='$uid'";
echo $sql;
$result = mysql_query($sql) or die('Query1 failed: ' . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$status = $line["partner1"];
if ($status == NULL) {
    mysql_query("INSERT INTO `medicity`.`chat_receiver`
(
`partner1`,
`partner2`)
VALUES
('$uid',
'$receiver');");
} else {
    mysql_query("UPDATE `medicity`.`chat_receiver`
SET
`partner2` = '$receiver'
WHERE `partner1` = '$uid';");
}
$sql3 = "SELECT `name`
FROM `medicity`.`doctorregistration` where `doctorregistration`.`email`='$receiver'";
echo $sql3;
$result3 = mysql_query($sql3) or die('Query1 failed: ' . mysql_error());
$line3 = mysql_fetch_array($result3, MYSQL_ASSOC);

echo '<script>window.location="chat_p.php?id='.$receiver.' : '.$line3["name"].'"</script>';









