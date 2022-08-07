<?php
$fruits=["orange","apple","mango"];
$assoc=array(
    "name"=>"Saung Hayman Oo",
    "age"=>20,
    "status"=>false,
    "job"=>["web developer","project manager","IT consultant"]
);

echo count($fruits);
echo "<br>";
echo current($fruits);
echo "<br>";
echo end($fruits);
echo "<br>";
echo array_rand($fruits);
echo $fruits[array_rand($fruits)];
echo "<br>";
echo array_sum([1,2,3,4,5,"aaa"]);
echo "<br>";
$range=range(0,10);
echo "<pre>";
print_r($range);
echo "<br>";
echo in_array("mango",$fruits);
echo "<br>";
echo in_array("apple",$fruits)?"shi tal":"ma shi bu";
echo "<br>";
echo array_key_exists("name",$assoc)?"shi tal":"ma shi bu";
echo "<br>";
echo in_array(22,$assoc)?"shi tal":"ma shi bu";
echo "<br>";
print_r(array_keys($assoc));
echo "<br>";
print_r(array_values($assoc));
echo "<br>";
echo implode("-",$fruits);
echo "<br>";
echo join(" , ",$fruits);
echo "<br>";
rsort($fruits);
print_r($fruits);

echo "<br>";
krsort($assoc);
print_r($assoc);



