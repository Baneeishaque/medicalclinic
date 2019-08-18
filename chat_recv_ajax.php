<?php

session_start();
$uid = $_SESSION["user_id"];
//echo $uid;
require_once('dbconnect.php');
error_reporting(0);
//$receiver = $_GET["re"];

db_connect();





$sql = "SELECT * from chat_receiver where partner1='$uid'";
//echo $sql;
$result2 = mysql_query($sql) or die('Query1 failed: ' . mysql_error());
$line = mysql_fetch_array($result2, MYSQL_ASSOC);
$receiver = $line["partner2"];
//echo $receiver;

$sql = "SELECT *, date_format(chatdate,'%d-%m-%Y %r') as cdt from chat where (receiver='$receiver' and sender= '$uid') OR (receiver='$uid' and sender= '$receiver')order by ID desc limit 200";

$sql = "SELECT * FROM (" . $sql . ") as ch order by ID ";
//echo $sql;
$result = mysql_query($sql) or die('Query1 failed: ' . mysql_error());

// Update Row Information
$msg = "<table border='0' style='font-size: 10pt; color: blue; font-family: verdana, arial;'>";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    //$sql = "select name from student where StudentID=" . $line["sender"];
    //echo $sql;
    //$result2 = mysql_query($sql) or die('Query2 failed: ' . mysql_error());
    //while ($line2 = mysql_fetch_array($result2, MYSQL_ASSOC)) {
    //    $sender_name = $line2["name"];
    //}
    if ($line["sender"] == $uid) {
        $msg = $msg . '<li class="user1">
									
									<div class="info">
										<span class="arrow"></span>
										<div class="detail">
											<span class="sender">
												<strong>You</strong> says:
											</span>
											<span class="time">' . $line["chatdate"] . '</span>
										</div>
										<div class="message">
											<p>' . $line["msg"] . '</p>
										</div>
									</div>
								</li>';
    } else {

        $msg = $msg . '<li class="user2">
									
									<div class="info">
										<span class="arrow"></span>
										<div class="detail">
											<span class="sender">
												<strong>' . $line["sender"] . '</strong> says:
											</span>
											<span class="time">' . $line["chatdate"] . '</span>
										</div>
										<div class="message">
											<p>' . $line["msg"] . '</p>
										</div>
									</div>
								</li>';
    }
}

echo $msg;






