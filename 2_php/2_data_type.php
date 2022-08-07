<?php
$name="su pon";
$nickName="hayman";
echo "$name";
echo "<br>";
var_dump($name);
echo "<br>";

$age=22;
var_dump($age);
echo "<br>";

$weight=95.6;
var_dump($weight);
echo "<br>";

$status=true;
echo $status;
var_dump($status);
echo "<br>";

$arr=array("x","y","z");
$arr[3]="a";
echo $arr[3];
echo "<br>";

$assoc=array(
    "name"=>"su pon",
    "age"=>22,
    "skill"=>array("html","css","js")
);
echo $assoc["name"];
echo "<br>";
echo "<pre>";
print_r($assoc);
echo "<br>";

$obj=(object)$assoc;
var_dump($obj);
var_dump($obj->name);