<?php
$name="su pon";
$age=22;
$arr=["x","y","z"];
$assoc=[
    "first_name"=>"Su",
    "last_name"=>"Pon"
];
function run(){
    global $name;
    return $name;
}
echo "<br>";
echo run();
echo "<br>";

echo "My name is ".$name." and ".$age."years old\n";
echo "this is $arr[1]\n";
echo "this is {$assoc['first_name']}\n";