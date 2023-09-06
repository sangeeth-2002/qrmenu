<?php

include "./Importphpfle/connection.php";

// echo ("ok");

// $rs=Database::search("SELECT * FROM `neworders` ");
// $num=$rs->num_rows;

// echo($num);


$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$time = $d->format(" H:i:s");

Database::iud("INSERT INTO `neworders`(`orderId`,`mobile`,`tableId`,`amount`,`timePlaced`) VALUES('1111','777','555','88','" . $time . "')");

echo ("ok");
