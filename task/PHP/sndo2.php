<?php
include ("db.php");
echo "done";
$who=$_GET["who"];
$money=$_GET["money"];
$date=$_GET["date"];
$leh=$_GET["leh"];

$db->exec("INSERT INTO Sndo2(who,money,date,leh)VALUES ('$who','$money','$date','$leh');");
?>



