<?php
include ("db.php");
echo "done";
$no3=$_GET["what"];
$who=$_GET["who"];
$money=$_GET["money"];
$date=$_GET["date"];
$leh=$_GET["leh"];

$stm=$db->exec("INSERT INTO EST72A2(no3,who,money,date,leh)VALUES('$no3' ,'$who','$money','$date','$leh');");

?>



