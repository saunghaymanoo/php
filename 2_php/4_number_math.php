<?php
$no=123.45;
$weight=95.23;
$height=5.7;
$money=123456;

echo is_int($money);
echo "<br>";
echo round($weight);
echo "<br>";
echo pow(2,5);
echo "<br>";
echo sqrt(9);
echo "<br>";
echo abs(-55);
echo "<br>";
echo ceil($weight);
echo "<br>";
echo floor(5.7);
echo "<br>";
echo rand(1,6);
echo "<br>";
echo max(0,150,30,20,-8,-200);
echo "<br>";
echo min(0,150,30,20,-8,-200);
echo "<br>";
echo number_format($money,3,'.',' ');