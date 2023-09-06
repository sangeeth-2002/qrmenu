<?php

require "connection.php";


$uniq_id=uniqid();


$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date_time = $d->format("Y-m-d H:i:s");

Database::iud("INSERT INTO `newOrders`(`newoder_id`,`TP_no`,`placed_time`,`resTables_id`,`amount`) VALUES
('".$uniq_id."','0785458659','".$date_time."','2','10000')");

echo("ok");

?>