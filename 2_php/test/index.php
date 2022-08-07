<?php
include "two.php";


echo "<br>";
$name="su pon chit";
echo $name;
echo "<br>";
echo md5($name);
echo "<br>";
echo sha1($name);
echo "<br>";
echo "<br>";
echo crypt($name,"spc");
echo "<br>";


echo password_hash($name,PASSWORD_DEFAULT);
echo "<br>";
$hash=password_hash($name,PASSWORD_DEFAULT);
echo password_verify($name,$hash)?"true":"false";

echo "<br>";
echo "<br>";
date_default_timezone_set("Asia/Yangon");
echo date("d-m-Y h:i");
echo "<br>";
$current=date_create(date('d-m-Y'));
date_sub($current,date_interval_create_from_date_string('3days'));
echo date_format($current,'d-m-Y');
echo "<br>";
echo cal_days_in_month(CAL_GREGORIAN,date('m'),date('Y'));