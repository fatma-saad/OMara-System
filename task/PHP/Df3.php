<?php
include ("db.php");
echo "done";
$no3=$_GET["what"];
$who=$_GET["who"];
$money=$_GET["money"];
$date=$_GET["date"];
$db->exec("INSERT INTO DF3(no3,who,money,date)VALUES ('$no3','$who','$money','$date');");
?>



