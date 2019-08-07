<?php
$db = new PDO('sqlite:mydb.db');
$db->exec ("Create TABLE EST72A2 (no3 TEXT,who Text  ,money INTEGER ,date DATE ,leh Text)");
$db->exec ("Create TABLE DF3 (no3 TEXT,who Text  ,money INTEGER ,date DATE)");
$db->exec ("Create TABLE Sndo2 (who TEXT,money INTEGER ,date DATE,leh TEXT)");
$db->exec ("Create TABLE x (who TEXT,money INTEGER )");

?>