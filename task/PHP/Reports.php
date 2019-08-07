<?php
$dbhandle = new PDO('sqlite:mydb.db');

$sqlTotal = $dbhandle->prepare("SELECT SUM(money) FROM EST72A2 Where (who='all')");
$sqlTotal->execute();
$totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
$totalResult = $totalResult[0];

$sqlTotal = $dbhandle->prepare("SELECT SUM(money) FROM EST72A2 Where (who='A')");
$sqlTotal->execute();
$totalResult1 = $sqlTotal->fetch(PDO::FETCH_NUM);
$totalResult1 = $totalResult1[0];
$resault1=$totalResult1+$totalResult;
echo nl2br(" EST72AT FOR A =".  $resault1."\r\n");


$sqlTotal = $dbhandle->prepare("SELECT SUM(money) FROM EST72A2 Where (who='B')");
$sqlTotal->execute();
$totalResult2 = $sqlTotal->fetch(PDO::FETCH_NUM);
$totalResult2 = $totalResult2[0];
$result2=$totalResult2+$totalResult;
echo nl2br(" EST72AT FOR B =".$result2."\n");

$sqlTotal = $dbhandle->prepare("SELECT SUM(money) FROM EST72A2 Where (who='C')");
$sqlTotal->execute();
$totalResult3 = $sqlTotal->fetch(PDO::FETCH_NUM);
$totalResult3 = $totalResult3[0];
$result3=$totalResult3+$totalResult;
echo nl2br(" EST72AT FOR C =". $result3."\n");

$sqlTotal = $dbhandle->prepare("SELECT SUM(money) FROM EST72A2 Where (who='C')");
$sqlTotal->execute();
$totalResult4 = $sqlTotal->fetch(PDO::FETCH_NUM);
$totalResult4 = $totalResult4[0];
$result4=$totalResult4+$totalResult;
echo nl2br( " EST72AT FOR D =". $result4."\n\n\n");
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sqlTotal = $dbhandle->prepare("SELECT SUM(money) FROM Sndo2 ");
$sqlTotal->execute();
$totalResult5 = $sqlTotal->fetch(PDO::FETCH_NUM);
$totalResult5 = $totalResult5[0];
echo nl2br(" Payments from el sndo2 =". $totalResult5."\n\n");

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sqlTotal = $dbhandle->prepare("SELECT SUM(money) FROM DF3 ");
$sqlTotal->execute();
$totalResult6 = $sqlTotal->fetch(PDO::FETCH_NUM);
$totalResult6 = $totalResult6[0];
$RESULT=$totalResult6-$totalResult5;
echo nl2br(" EL RSEED EL 7ALY =". $RESULT."\n");



?>